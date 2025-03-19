<?php

return [
    'paths' => ['api/*', 'adddata'], // Add 'adddata' to the paths array
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173'], // Allow your frontend origin
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];


