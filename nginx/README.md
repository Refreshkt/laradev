En este directorio tenemos la configuración actual del servidor Nginx

Desde el directorio /etc/ en la raiz del sistema modificamos el archivo hosts para que nos reconozca un nombre de dominio
en este mismo directorio podemos acceder al directorio nginx /etc/nginx/ donde encontraremos el driectorio sites-available y sites-enable
en /etc/nginx/sites-available/ creamos un archivo de texto con la configuracion del servidor, en este caso lara.dev, una vez creado hacemos un enlace simbolico de este archivo al directorio sites-enabled.

Notese que se hacen un par de includes en lara.dev a otros dos archivos de configuración, php.conf y sec.conf, que podrían estar en cualquier directorio, pero perfectamente podríamos haber incluido las lineas de código directamente en el archivo lara.dev, hacerlo así es solo una forma de separar el código para poder tratar cada uno por separado y no en un archivo globalizado que se puede hacer muy extenso.

En este momento pdemos reiniciar el servidor nginx y acceder a http://lara.dev y obtendremos un error desde el servidor nginx diciendo que no encuentra el archivo, esto es correcto ahora deberiamos instalar laravel en /www/var/html/

https://github.com/Refreshkt/laradev/tree/master/lara