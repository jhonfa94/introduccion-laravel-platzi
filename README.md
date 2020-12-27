# Guía para instalar el proyecto
Este es un proyecto de prueba realizado en el **Curso de Introducción a Laravel** de plataforma de [platzi](https://platzi.com/)

1. Descargar o clonar el repositorio
2. Renombra la carpeta (Opcional) 
3. Entra a la carpeta desde la terminal `cd directorio/de/la/carpeta`
4. Copia el contenido del archivo `.env.example` a un nuevo archivo llamado `.env`
    * Si estás en Linux o Mac puedes ejecutar el comando: `cp .env.example .env`
5. Crea una base de datos para el proyecto
6. Modifica las variables de conexión del nuevo archivo `.env` 
    * Define los datos de conexión 
        * DB_DATABASE=
        * DB_USERNAME=
        * DB_PASSWORD=  
7. Ejecuta `composer install`
8. Ejecuta `php artisan key:generate`
9. Ejecuta `php artisan migrate`
10. Ejecuta `npm install`
11. Ejecuta `npm run dev`
12. A través de la términal acceder a la carpeta del proyecto y ejecutar el comando `php artisan serve --port=80`
13. Abre la aplicación en el navegador 




## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
