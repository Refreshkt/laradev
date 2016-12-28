<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | De forma predeterminada, los resultados de la base de datos se devolverán como instancias de PHP
    | StdClass objeto; Sin embargo, es posible que desee recuperar registros en un
    | Para la simplicidad. Aquí puede ajustar el estilo de búsqueda.
    |
    */

    'fetch' => PDO::FETCH_OBJ,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar cuál de las conexiones de base de datos a continuación desea
    | Para usar como su conexión predeterminada para todo el trabajo de la base de datos. Por supuesto
    | Puede utilizar muchas conexiones a la vez utilizando la biblioteca de bases de datos.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Aquí están las configuraciones de las conexiones de la base de datos para su aplicación.
    | Por supuesto, los ejemplos de configuración de cada plataforma de base de datos que es
    | Apoyado por Laravel se muestra a continuación para hacer el desarrollo simple.
    |
    |
    | Todo el trabajo de base de datos en Laravel se realiza a través de las instalaciones PDO de PHP
    | Así que asegúrese de tener el controlador para su base de datos particular de
    | Opción instalada en su máquina antes de comenzar el desarrollo.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | Esta tabla mantiene un registro de todas las migraciones que ya se han ejecutado para
    | su aplicación. Usando esta información, podemos determinar cuál de
    | Las migraciones en disco no se han ejecutado realmente en la base de datos.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis es un almacén de key-value abierto, rápido y avanzado que también
    | Proporciona un conjunto más rico de comandos que un sistema típico de valores clave
    | Tales como APC o Memcached. Laravel facilita la excavación.
    |
    */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host' => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
