<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | La mayoría de los sistemas de plantillas cargan plantillas desde el disco. Aquí puede especificar
    | Una serie de rutas que deben comprobarse para sus vistas. Por supuesto
    | El camino de vista habitual de Laravel ya ha sido registrado para usted.
    |
    */

    'paths' => [
        realpath(base_path('resources/views')),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | Esta opción determina dónde se mostrarán todas las plantillas de Blade compiladas.
    | Almacenado para su aplicación. Normalmente, esto está dentro del almacenamiento
    | directorio. Sin embargo, como es habitual, puede cambiar este valor.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
