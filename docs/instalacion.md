# Instalación del proyecto

$ composer create-project --prefer-dist laravel/laravel blog
$ cd blog/
$ composer require laravel/ui --dev
$ php artisan ui bootstrap --auth
$ sudo apt-get install npm
$ npm install && npm run dev
$ php artisan make:model Post -mfc
$ composer require cviebrock/eloquent-sluggable


php artisan make:model Post -mfc
 //creamos la migracion la factory y el controller

 composer global require laravel/installer //Instalador de laravel usando composer
composer require laravel/ui //Instalar paquete de laravel ui para hacer auth
php artisan ui bootstrap –auth //Generando auth scaffolding
npm install //para instalar todas las dependencias NPM
npm run dev //para compilar