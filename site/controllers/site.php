<?php

return function($kirby, $pages, $page) {
  /* CONTACT FORM LOGIC BELOW

  The secrets.php file in the /site/controllers folder is git-ignored.
  It includes secret environment configurations.

  For this file, it includes the email address of the recipient for the contact form.
  (Potentially, it may include SMTP configurations.)

  Imported variables:
  $SECRET_RECIPIENT_EMAIL

  */
  require 'secrets.php';

  $alert = null;

  // React to contact form POST requests only:
  if(
    $kirby->request()->is('POST') &&
    get('contact')
  ){
    // HONEYPOT: Redirect if bot sends a message:
    if(empty(get('website')) === false){
      go($page->url());
      exit;
    }

    // Form submission
    $data = [
      'name' => get('name'),
      'email' => get('email'),
      'text' => get('text'),
    ];

    $rules = [
      'name'  => ['required', 'minLength' => 1],
      'email' => ['required', 'email'],
      'text'  => ['required', 'minLength' => 1, 'maxLength' => 10000]
    ];

    $messages = [
      'name'  => 'Bitte geben Sie einen Namen ein.',
      'email' => 'Bitte geben Sie eine Email-Adresse ein.',
      'text'  => 'Bitte geben Sie eine Nachricht ein. Für längere Texte (mit mehr als 10000 Zeichen) nutzen Sie bite Email.'
    ];
    if(get('language') === 'en'){
      $messages = [
        'name'  => 'Please enter a name.',
        'email' => 'Please enter an email address.',
        'text'  => 'Please enter a message. If it is a longer message (with more than 10000 character) please use an email instead.'
      ];
    }

    // Data validation
    if($invalid = invalid($data, $rules, $messages)){
      // data is invalid:
      $alert = $invalid;
    }else{
      // Valid data:
      try {
        $kirby->email([
          'template' => 'email',
          'from'     => 'webmaster@sp-healthcare.de',
          'replyTo'  => $data['email'],
          'to'       => $SECRET_RECIPIENT_EMAIL,
          'subject'  => 'Webseite Kontaktformular: ' . esc($data['name']),
          'data'     => [
            'text'   => esc($data['text']),
            'sender' => esc($data['name']),
            'email' => esc($data['email'])
          ]
        ]);
      } catch (Exception $error) {
        if(option('debug')):
          $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
        else:
          $alert['error'] = 'Die Nachricht konnte nicht abgeschickt werden.';
          if(get('language') === 'en'){
            $alert['error'] = 'The message could not be sent.';
          }
        endif;
      }

      // Set response data if no exception has occured: 
      if (empty($alert) === true) {
        $success = 'Nachricht verschickt!';
        if(get('language') === 'en'){
          $success = 'Message sent!';
        }
        
        $data = [];
      }
    } // /if data validation
  } // /if form submit

  return [
    'alert' => $alert,
    'data' => $data ?? false,
    'success' => $success ?? false
  ];
};