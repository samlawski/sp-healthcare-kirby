<?php

return [
  'debug' => true,
  'languages' => true,
  'routes' => [
    [
      'pattern' => 'kontakt',
      'action' => function(){
        return site()->visit('error');
      }
    ]
  ]
];