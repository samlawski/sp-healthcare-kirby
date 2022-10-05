<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Meta & SEO -->
  <title><?= $page->title() ?> | <?= $site->title() ?></title>
  <meta property="og:title" content="<?= $page->title() ?>" />
  <meta property="og:locale" content="<?= $kirby->language()->locale(LC_ALL) ?>" />
  <meta name="description" content="<?= $page->description() ?>" />
  <meta property="og:description" content="<?= $page->description() ?>" />
  <link rel="canonical" href="<?= $page->url() ?>" />
  <meta property="og:url" content="<?= $page->url() ?>" />
  <meta property="og:site_name" content="<?= $site->title() ?>" />
  <meta name="twitter:card" content="summary" />
  <meta property="twitter:title" content="<?= $page->title() ?>" />
  <script type="application/ld+json">
    {
      "headline":"<?= $page->title() ?>",
      "@type":"WebSite",
      "description":"<?= $page->description() ?>",
      "url":"<?= $page->url() ?>",
      "publisher":{
          "@type":"Organization",
          "logo":{
            "@type":"ImageObject",
            "url":"<?= $site->logo() ?>"
          }
      },
      "name":"<?= $site->title() ?>",
      "@context":"https://schema.org"
    }
  </script>

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/static/favicons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/static/favicons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/static/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/static/favicons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/static/favicons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/static/favicons/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="/assets/static/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/assets/static/favicons/favicon-16x16.png" sizes="16x16" />
  <meta name="application-name" content="SP Healthcare Serivces"/>
  <meta name="msapplication-TileColor" content="#28446F" />
  <meta name="msapplication-TileImage" content="/assets/static/favicons/mstile-144x144.png" />

  <!-- CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
  <?php
    $assets_manifest_json = file_get_contents('assets/dist/manifest.json');
    $assets_manifest_obj = json_decode($assets_manifest_json, true);

    $assets_js_path = "assets/dist/{$assets_manifest_obj['main.js']['file']}";
    $assets_css_path = "assets/dist/{$assets_manifest_obj['main.js']['css'][0]}";
  ?>

  <?= css($assets_css_path) ?>
  
  <!-- <link rel="canonical" href="{{ page.url | replace:'index.html','' | prepend: site.baseurl | prepend: site.url }}">
  <link rel="alternate" type="application/rss+xml" title="{{ site.title }}" href="{{ "/feed.xml" | prepend: site.baseurl | prepend: site.url }}"> -->

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <?= js($assets_js_path) ?>

  <script>
    // Clear unwanted cookies
    if(localStorage.cookiesReset != 'v1'){
      (function () {
        var cookies = document.cookie.split("; ");
        for (var c = 0; c < cookies.length; c++) {
          var d = window.location.hostname.split(".");
          while (d.length > 0) {
            var cookieBase = encodeURIComponent(cookies[c].split(";")[0].split("=")[0]) + '=; expires=Thu, 01-Jan-1970 00:00:01 GMT; domain=' + d.join('.') + ' ;path=';
            var p = location.pathname.split('/');
            document.cookie = cookieBase + '/';
            while (p.length > 0) {
              document.cookie = cookieBase + p.join('/');
              p.pop();
            };
            d.shift();
          }
        }
      })();
      localStorage.cookiesReset = 'v1'
    }
  </script>
</head>