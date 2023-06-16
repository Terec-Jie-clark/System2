<?php

return [

    'default' => env('DB_CONNECTION', 'supabase'),

    'migrations' => 'migrations',

    'connections' => [

        'supabase' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', ''),
            'port' => env('DB_PORT', ''),
            'database' => env('DB_DATABASE', ''),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
        ],

    ],

    // ...

];