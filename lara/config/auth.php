<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la autenticación predeterminada "guard" y la contraseña
    | Opciones de reinicio para su aplicación. Puede cambiar estos valores predeterminados
    | Como sea necesario, pero son un comienzo perfecto para la mayoría de las aplicaciones.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | A continuación, puede definir cada protector de autenticación para su aplicación.
    | Por supuesto, una gran configuración por defecto se ha definido para usted
    | Aquí, que utiliza el almacenamiento de sesiones y el proveedor de usuarios Eloquent.
    |
    | Todos los controladores de autenticación tienen un proveedor de usuarios. Esto define cómo
    | Los usuarios se recuperan realmente de su base de datos u otro almacenamiento
    | Los mecanismos utilizados por esta aplicación para persistir los datos de su usuario.
    |
    | Soportado: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | Todos los controladores de autenticación tienen un proveedor de usuarios. Esto define cómo
    | Los usuarios se recuperan realmente de su base de datos u otro almacenamiento
    | Los mecanismos utilizados por esta aplicación para persistir los datos de su usuario.
    |
    | Si tiene varias tablas o modelos de usuario, puede configurar varios
    | Fuentes que representan cada modelo / tabla. Estas fuentes pueden entonces
    | Ser asignado a los protectores de autenticación adicionales que haya definido.
    |
    | Soportado: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Puede especificar varias configuraciones de restablecimiento de contraseña si tiene más
    | Que una tabla o modelo de usuario en la aplicación y que desea tener
    | Configuraciones de restablecimiento de contraseña independientes basadas en los tipos de usuario específicos.
    |
    | El tiempo de caducidad es el número de minutos que el token de reinicio debe ser
    | Considerado válido. Esta característica de seguridad mantiene los tokens de corta duración así que
    | Tienen menos tiempo para ser adivinados. Puede cambiar esto según sea necesario.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
