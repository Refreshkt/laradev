<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar el disco de sistema de archivos predeterminado que debe utilizarse
    | Por el marco. Un controlador "local", así como una variedad de
    | Basado en los conductores están disponibles para su elección. ¡Almacene!
    |
    | Soportado: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Muchas aplicaciones almacenan archivos tanto localmente como en la nube. Para esto
    | Razón, puede especificar un controlador de "nube" predeterminado aquí. Este conductor
    | Se vinculará como la implementación del disco Cloud en el contenedor.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Aquí puede configurar tantos "discos" del sistema de archivos como desee y
    | Incluso puede configurar varios discos del mismo controlador. Los valores predeterminados
    | Configurado para cada controlador como un ejemplo de las opciones requeridas.
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

    ],

];
