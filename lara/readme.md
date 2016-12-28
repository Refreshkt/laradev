# Laravel PHP Framework

Este es el resultado de crear un proyecto laravel con composer, está claro que composer debe estar instalado en la máquina para beneficiarse de su utilidad, no voy a explicar la instalación de composer, puedes encontrar mucha información en la red que te ayudará en la instalación.

Para crear el proyecto lo único que se debe hacer, es abrir un terminal y situarse en el directorio donde creas tus proyectos, en mi caso estoy utilizando una distribución linux ligera xubuntu 16.04 y tambien estoy haciendo pruebas en una raspberry con ubuntu server 14.04 donde instalé nginx y donde instalé php7, en los dos casos el directorio se encuentra en  /var/www/html/, una vez situado en este directorio desde el termial se corre el siguiente comando

composer create-project --prefer-dist laravel/laravel lara

El cual crea la estructura básica para iniciar cualquier proyecto.

En este momento podemos acceder a http://lara.dev y obtendremos una pantalla en blanco, sin ningún tipo de error, esto es por que todavía tenemos que hacer algunos cambios en la estructura del proyecto.

Los cambios que debo realizar son los permisos de lectura y escritura de algunos directorios y archivos de la estructura de laravel, en mi caso y teniendo en cuenta que estoy en un servidor local, los permisos los tengo de lectura y escritura para mi usuario y lo que necesito es que el usuario del servidor tenga estos permisos para algunos directorios y archivos, el usuario del servidor podemos verlo en el archivo /etc/nginx/nginx.conf, donde veremos en la primera linea el siguiente código que define el usuario, user www-data;

Con esto claro y en mi caso, simplemente defino el grupo www-data para los directorios "storage" y "bootstrap/cache", desde el terminal y situandonos en /var/www/html/lara/ añadimos el grupo www-data de la siguiente forma

sudo chown -R usuario:www-data storage 
-donde usuario es el usuario del sistema y www-data el usuario del servidor, el comando chown nos permite definir el propietario y el grupo, usuario=propietario www-data=grupo, con -R decimos que defina este propietario y este grupo a todos los archivos y carpetas dentro de storage.

En mi caso tengo definidos los permisos ya, pero para definirlos tampoco es muy complicado, utilizaremos el siguiente comando

sudo chmod 775 -R storage
-Esto es, el primer digito para el propietario, el segundo para el grupo y el tercero para el resto, 7 da permisos de lectura y escritura y 5 permisos de solo lectura.

hacemos lo mismo para bootstrap/cache y listo, si ahora refrescamos la url http://lara.dev obtendremos la página del framework

Nótese que los permisos que ahora mismo tiene el servidor son solo de lectura y escritura para las dos carpetas y su contenido que hemos descrito, esto deberemos tenerlo en cuenta para cualquier otra carpeta que necesite estos permisos, por lo que cuando se programe alguna acción se deberá tener en cuenta la seguridad necesaria para evitar cualquier intento de escritura malintencionada.

Podemos ahora pararnos un poco a ver la estructura del framework y localizar los directorios y archivos que más se van a utilizar.

En primer lugar veremos el archivo oculto .env, que se genera con la instalación del framework y que modificaremos según nuestras necesidades.

https://github.com/Refreshkt/laradev/blob/master/lara/.env

si accedemos al archivo .env veremos una serie de variables globales, que iremos modificando según la necesidad. Prestaremos atención a las primeras variables:

APP_ENV=local	-> Aquí definimos con local que estamos en desarrollo, algo que cambiaremos cuando pasemos a producción.

APP_KEY=base64:azUb6BxrbCvXGzeHO1UI9p+RrmvgNBJ1AYd6HfEmDBs=	-> Aquí tendremos la clave creada en la instalación, si no hay clave tendremos que crearla con artisan.

APP_DEBUG=true	-> Aqui definimos si queremos tener visibles los errores para poder tratarlos, utilizamos true cuando estamos en desarrollo.

APP_LOG_LEVEL=debug	-> Aquí definimos que queremos que los errores se escriban en el log.

APP_URL=http://localhost	-> Aquí definimos la url de la aplicación.

En el caso de que la APP_KEY no se haya generado en la instalación tenemos la opción de utilizar el comando artisan para generarla.
Nos situamos en /var/www/html/lara y ejecutamos el siguiente comando.

php artisan key:generate "esto genera la clave y actualiza el archivo .env".

Estas variables globales se utilizan en el archivo https://github.com/Refreshkt/laradev/blob/master/lara/config/app.php, donde he traducido con el traductor de google los comentarios del mismo.
 
Se traducen los comentarios de todos los archivos php de la carpeta config para una rápida compresión, todos estos archivos pueden ser configurados según las necesidades del sistema, es importante repasarlos para tomar conciencia de las posibilidades que ofrece el framework.

Lo primero que haremos después de revisar y configurar de forma básica los archivos vistos, es crear una base de datos y modificar el archivo .env con los datos de conexion a la BD.

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=Nombre de la base de datos creada.

DB_USERNAME=Usuario de la base de datos creada.

DB_PASSWORD=Contraseña de la base de datos creada.

con esto ya podriamos ejecutar el comando para las migraciones que vienen por defecto en /database/migrations y comprobar que todo funciona correctamente, tambien podemos aprovechar la configuración por defecto que nos da laravel en /config/auth.php y los controladores en /app/Http/Auth/ para crear el sistema de autenticación con un simple comando de artisan, lo que nos creará las vistas en /resources/views/auth/ y en /resources/views/layouts/ y añadira el código para las rutas en /routes/web.php.

Comando artisan para crear el sistema de autenticación, ejecutamos el comando desde la raiz del proyecto en mi caso /var/www/html/lara:
php artisan make:auth	-> https://translate.google.es/translate?sl=en&tl=es&js=y&prev=_t&hl=es&ie=UTF-8&u=https%3A%2F%2Flaravel.com%2Fdocs%2F5.3%2Fauthentication&edit-text=&act=url aquí el apartado autenticación de la documentación de laravel traducido por google.

Comando artisan para las migraciones:
php artisan migrate	-> https://translate.google.es/translate?sl=en&tl=es&js=y&prev=_t&hl=es&ie=UTF-8&u=https%3A%2F%2Flaravel.com%2Fdocs%2F5.3%2Fmigrations&edit-text=&act=url aquí el apartado migraciones de la documentación de laravel traducido por google.

Si todo ha ido bien, tendremos las modificaciones y las nuevas vistas creadas, muy simples, pero creadas, también tendremos las tablas creadas por la migración, así que ya podremos utilizar esas vistas y empezar a utilizar el sistema básico.

