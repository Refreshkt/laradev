<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | Laravel soporta la función de "mail" de SMTP y PHP como controladores
    | Envío de correo electrónico. Puede especificar el que está utilizando en todo
    | Su aplicación aquí. De forma predeterminada, Laravel está configurado para correo SMTP.
    |
    | Soportado: "smtp", "mail", "sendmail", "mailgun", "mandrill",
    |            "ses", "sparkpost", "log"
    |
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Address
    |--------------------------------------------------------------------------
    |
    | Aquí puede proporcionar la dirección de host del servidor SMTP utilizado por su
    | Aplicaciones. Se proporciona una opción predeterminada que es compatible con
    | El servicio de correo Mailgun que proporcionará entregas confiables.
    |
    */

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Port
    |--------------------------------------------------------------------------
    |
    | Este es el puerto SMTP utilizado por la aplicación para enviar correos electrónicos a
    | Usuarios de la aplicación. Al igual que el host, hemos establecido este valor para
    | Permanecen compatibles con la aplicación de correo electrónico Mailgun de forma predeterminada.
    |
    */

    'port' => env('MAIL_PORT', 587),

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | Es posible que desee que todos los correos electrónicos enviados por su solicitud sean enviados desde
    | La misma dirección. Aquí, puede especificar un nombre y una dirección
    | Utilizado globalmente para todos los correos electrónicos enviados por su aplicación.
    |
    */

    'from' => [
        'address' => 'hello@example.com',
        'name' => 'Example',
    ],

    /*
    |--------------------------------------------------------------------------
    | E-Mail Encryption Protocol
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar el protocolo de cifrado que se debe utilizar cuando
    | La aplicación envía mensajes de correo electrónico. Un valor predeterminado
    | Protocolo de seguridad de capa de transporte debe proporcionar una gran seguridad.
    |
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Username
    |--------------------------------------------------------------------------
    |
    | Si su servidor SMTP requiere un nombre de usuario para la autenticación, debe
    | Ponlo aquí. Esto se acostumbrará a autenticarse con su servidor en
    | conexión. También puede establecer el valor de "password" debajo de este.
    |
    */

    'username' => env('MAIL_USERNAME'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Password
    |--------------------------------------------------------------------------
    |
    | Aquí puede establecer la contraseña requerida por su servidor SMTP para enviar
    | Mensajes de su aplicación. Esto se dará al servidor en
    | Para que la aplicación pueda enviar mensajes.
    |
    */

    'password' => env('MAIL_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Sendmail System Path
    |--------------------------------------------------------------------------
    |
    | Cuando se utiliza el controlador "sendmail" para enviar correos electrónicos, tendremos que saber
     | La ruta a donde Sendmail vive en este servidor. Una ruta predeterminada tiene
     | Aquí, que funcionará bien en la mayoría de sus sistemas.
    |
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

];
