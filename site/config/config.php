<?php

date_default_timezone_set('America/New_York');

return [
    'algolia' => require __DIR__ . '/algolia.php',
    'debug' => false,
    'markdown' => [
        'extra' => true,
    ],
    'panel' =>[
        'install' => true
    ]
];
