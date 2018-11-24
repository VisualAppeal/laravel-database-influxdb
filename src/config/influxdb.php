<?php

return [

    'protocol' => env('INFLUXDB_PROTOCOL', 'http'),

    'user' => env('INFLUXDB_USERNAME', null),

    'pass' => env('INFLUXDB_PASSWORD', null),

    'host' => env('INFLUXDB_HOST', 'localhost'),

    'port' => env('INFLUXDB_PORT', 8086),

    'database' => env('INFLUXDB_DATABASE', 'default'),

    'queue' => [

        'enable' => env('INFLUXDB_QUEUE_ENABLE', false),

        'name' => env('INFLUXDB_QUEUE_NAME', 'default'),

    ],

    'timeout' => env('INFLUXDB_TIMEOUT', 5),

    'verify_ssl' => env('INFLUXDB_VERIFY_SSL', true),

];
