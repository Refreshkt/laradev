# Laravel PHP Framework

Este es el resultado de crear un proyecto laravel con composer, está claro que composer debe estar instalado en la máquina para beneficiarse de su utilidad, no voy a explicar la instalación de composer, puedes encontrar mucha información en la red que te ayudará en la instalación.

Para crear el proyecto lo único que se debe hacer, es abrir un terminal y situarse en el directorio donde creas tus proyectos, en mi caso estoy utilizando una distribución linux ligera xubuntu 16.04 y tambien estoy haciendo pruebas en una raspberry con ubuntu server 14.04 donde instalé nginx y donde instalé php7, en los dos casos el directorio se encuentra en  /var/www/html/, una vez situado en este directorio desde el termial se corre el siguiente comando

composer create-project --prefer-dist laravel/laravel lara

El cual crea la estructura básica para iniciar cualquier proyecto.