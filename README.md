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

## About The Current Project

The goal of this project is to design (using Merise) and develop a web application (Laravel/Mysql) for managing the federating projects of students in the school for the first, second, and third years. The application will allow for:
- A public space to present the school and its programs, the progress and steps of the project, etc., as well as a space for student group registration (in pairs for the first and second year, and 3 to 4 students for the third year per program).
- A private space including:
  * A super administrator to create accounts for professors and students and reset passwords.
  * A professor-administrator per program and level to launch the project, request proposal topics from professors, create an evaluation grid (with objectives rated from 1 to 5 for example), assign topics to students based on their choices, propose a schedule for candidate defenses, etc.
  * A professor to consult their account, propose topics, exchange with students (requesting work with deadlines), receive reports, propose grades according to the grid proposed after the defense, etc.
  * A student to create and consult their account, fill out choices based on the proposals of professors, implement required work, exchange with the supervising professor, upload the required report and documents, view the schedule for the defense.


## How does it work ?

```
git clone https://github.com/khaouitiabdelhakim/Final-Project.git

cd Final-Project

composer install

copy .env.example .env

php artisan key:generate

php artisan migrate
 
php artisan serve

```

then Go to link localhost:8000
