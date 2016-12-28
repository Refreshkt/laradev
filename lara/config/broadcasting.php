<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | Esta opción controla el difusor predeterminado que utilizará el
    | Cuando se necesita difundir un evento. Puede configurar esto para
    | Cualquiera de las conexiones definidas en la matriz de "conexiones" a continuación.
    |
    | Soportado: "pusher", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Aquí puede definir todas las conexiones de difusión que se utilizarán
    | Para transmitir eventos a otros sistemas o a través de websockets. Muestras de
    | Cada tipo de conexión disponible se proporciona dentro de esta matriz.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_KEY'),
            'secret' => env('PUSHER_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                //
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
