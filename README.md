<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development
# Biblioteca de Santiago

Sistema web desarrollado con Laravel para administrar una biblioteca especializada en libros de terror, misterio y suspenso.

## Características

- Registrar, consultar, editar y eliminar libros.
- Crear y consultar categorías.
- Eliminar categorías únicamente cuando no tengan libros asociados.
- Buscar libros por título.
- Filtrar libros por categoría.
- Consultar la disponibilidad de cada libro.
- Validar los datos de los formularios.
- Mostrar mensajes de confirmación y error.
- Relacionar libros y categorías mediante una relación uno a muchos.

## Tecnologías utilizadas

- PHP 8.5
- Laravel 13
- MySQL
- Blade
- HTML y CSS
- Git y GitHub

## Requisitos previos

Para ejecutar este proyecto necesitas:

- PHP 8.5 o compatible.
- Composer.
- MySQL.
- Git.

## Instalación

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/santil23034323-cyber/biblioteca-mvc-santiago-leal.git
   ```

2. Entrar a la carpeta:

   ```bash
   cd biblioteca-mvc-santiago-leal
   ```

3. Instalar las dependencias:

   ```bash
   composer install
   ```

4. Crear el archivo de configuración:

   En Windows PowerShell:

   ```powershell
   Copy-Item .env.example .env
   ```

5. Crear una base de datos MySQL llamada:

   `biblioteca_santiago_leal`

6. Configurar las credenciales de conexión en el archivo `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=biblioteca_santiago_leal
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Generar la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

8. Ejecutar las migraciones y cargar los datos de prueba:

   ```bash
   php artisan migrate --seed
   ```

9. Iniciar el servidor:

   ```bash
   php artisan serve
   ```

10. Abrir en el navegador:

   http://127.0.0.1:8000

## Estructura del proyecto

El proyecto utiliza el patrón Modelo-Vista-Controlador (MVC):

- **Modelos:** representan los libros y las categorías y sus relaciones.
- **Vistas:** muestran la información mediante Blade.
- **Controladores:** gestionan las solicitudes, validaciones y operaciones de la aplicación.
- **Migraciones:** definen la estructura de la base de datos.
- **Seeders:** permiten cargar datos iniciales de prueba.

## Autor

**Santiago Leal**  
Ficha: 3478025  
Año: 2026
