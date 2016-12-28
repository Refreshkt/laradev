<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la conexión de caché predeterminada que se utiliza mientras
    | Utilizando esta biblioteca de almacenamiento en caché. Esta conexión se utiliza cuando otro es
    | No se especifica explícitamente al ejecutar una función de caché determinada.
    |
    | Apoyado: "apc", "array", "database", "file", "memcached", "redis"
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Aquí puede definir todas las "stores" de caché de su aplicación como
    | Así como sus conductores. Incluso puede definir varios almacenes para
    | Mismo controlador de caché para agrupar los tipos de elementos almacenados en sus cachés.
    |
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT  => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | Cuando se utiliza una tienda basada en RAM, como APC o Memcached,
    | Otras aplicaciones que utilizan el mismo caché. Por lo tanto, especificaremos un
    | Valor para obtener prefijado a todas nuestras claves para que podamos evitar colisiones.
    |
    */

    'prefix' => 'laravel',

];
