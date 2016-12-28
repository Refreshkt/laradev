<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | El API de cola de Laravel admite una variedad de back-ends a través de un
    | API, lo que le da acceso conveniente a cada back-end utilizando el mismo
    | Sintaxis para cada uno. Aquí puede establecer el controlador de cola predeterminado.
    |
    | Soportado: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Aquí puede configurar la información de conexión para cada servidor que
    | Es utilizado por su aplicación. Se ha agregado una configuración predeterminada
    | Para cada back-end enviado con Laravel. Usted es libre de agregar más.
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => 'your-public-key',
            'secret' => 'your-secret-key',
            'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
            'queue' => 'your-queue-name',
            'region' => 'us-east-1',
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 90,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | Estas opciones configuran el comportamiento del registro de trabajo de cola
    | Puede controlar qué base de datos y tabla se utilizan para almacenar los trabajos que
    | ha fallado. Puede cambiarlos a cualquier base de datos / tabla que desee.
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
