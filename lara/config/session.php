<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la sesión predeterminada "driver" que se usará en
    | peticiones. De forma predeterminada, utilizaremos el controlador nativo
    | Usted puede especificar cualquiera de los otros conductores maravillosos proporcionados aquí.
    |
    | Soportado: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar el número de minutos que desea que la sesión
    | Para que se le permita permanecer inactivo antes de que expire. Si quieres
    | Para que expire inmediatamente al cerrar el navegador, establezca esa opción.
    |
    */

    'lifetime' => 120,

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | Esta opción le permite especificar fácilmente que todos los datos de su sesión
    | Debe ser cifrado antes de ser almacenado. Todo el cifrado se ejecutará
    | Automáticamente por Laravel y puede utilizar la sesión como normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | Cuando se utiliza el controlador de sesión nativo, necesitamos una ubicación donde la sesión
    | Archivos pueden ser almacenados. Se ha establecido un valor predeterminado para usted, pero
    | Ubicación se puede especificar. Esto solo es necesario para las sesiones de archivos.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | Al utilizar los controladores de sesión "database" o "redis", puede especificar un
    | Conexión que debe utilizarse para administrar estas sesiones. Esto debería
    | Corresponden a una conexión en las opciones de configuración de la base de datos.
    |
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | Cuando utilice el controlador de sesión "database", puede especificar la
    | Debe utilizar para administrar las sesiones. Por supuesto, un defecto sensible es
    | Proporcionado para usted; Sin embargo, usted es libre de cambiar esto según sea necesario.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    |
    | Cuando utilice los controladores de sesión "apc" o "memcached", puede especificar un
    | Almacén de caché que debe utilizarse para estas sesiones. Este valor debe
    | Corresponden con uno de los almacenes de caché configurados de la aplicación.
    |
    */

    'store' => null,

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Algunos controladores de sesión deben barrer manualmente su ubicación de almacenamiento para obtener
    | Deshacerse de sesiones antiguas del almacenamiento. Aquí están las posibilidades de que
    | En una solicitud determinada. Por defecto, las probabilidades son 2 de 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Aquí puede cambiar el nombre de la cookie usada para identificar una sesión
    | Instancia por ID. El nombre especificado aquí se utilizará cada vez que un
    | La nueva cookie de sesión es creada por el framework para cada controlador.
    |
    */

    'cookie' => 'laravel_session',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | La ruta de cookie de sesión determina la ruta para la cual la cookie
    | Se considerará disponible. Normalmente, esta será la ruta raíz de
    | Su aplicación, pero usted es libre de cambiar esto cuando sea necesario.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Aquí puede cambiar el dominio de la cookie utilizada para identificar una sesión
    | En su aplicación. Esto determinará qué dominios es la cookie
    | Disponible en su aplicación. Se ha establecido un valor predeterminado adecuado.
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | Al establecer esta opción como verdadera, las cookies de sesión sólo se devolverán
    | Al servidor si el navegador tiene una conexión HTTPS. Esto mantendrá
    | La cookie de ser enviado a usted si no se puede hacer de forma segura.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE', false),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Establecer este valor en true evitará que JavaScript acceda al
    | Valor de la cookie y de la cookie sólo será accesible a través
    | El protocolo HTTP. Puede modificar esta opción si es necesario.
    |
    */

    'http_only' => true,

];
