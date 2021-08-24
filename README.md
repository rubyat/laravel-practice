## Create New Project:
    composer create-project laravel/laravel your-project-name --prefer-dist

## Authintications:
    composer require laravel/ui <br />
    php artisan ui vue --auth
    npm install && npm r un dev

## Create Controller with model:
    php artisan make:controller StoryController -r -m

## One to many /
    return $this->hasMany(Story::class);
    return $this->belongsTo(User::class);

## Select:
    Story::findOrFail($id);

## See the list of route
    php artisan route:list


## Blade Component:
    php artisan make:component Alert
    <x-alert />


## API:
    composer require laravel/sanctum
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    php artisan migrate

    php artisan make:controller Api/AuthController

    route/api.php
    Route::post('/authenticate', [AuthController::class, 'login']);

    php artisan make:model Project -mf

    // Make controller

    php artisan make:controller Api/ProjectsController --api

    // formate information resource 
    php artisan make:resource Project
    php artisan make:resource ProjectCollection



    php artisan config:clear

    php artisan make:middleware CheckAge

    php artisan make:controller showAge
    php artisan make:controller UserController --resource

    php artisan make:migration create_students_table --create=students
    php artisan migrate

    php artisan make:model Student --m

## For Login
    composer require laravel/ui
    php artisan ui vue --auth

    No Model we can create new attribute

    Slug can be set on model level with attributes
    have to define slug on route (column name)


## Seeder
    php artisan make:seeder UsersTableSeeder
    composer dump-autoload


## Mail:
    php artisan make:mail NotifyAdmin
    php artisan make:mail NewStoryNotification --markdown=emails.newStoryNotification
    php artisan vendor:publish --tag=laravel-mail (Bring vendor to resource view)

    Soft Delete:
    php artisan make:migration add_softdelete_to_stories --table=stories





    composer require doctrine/dbal
    এটা আমাদের সব প্যাকেজ গুলোকে update, প্রয়োজনে add করে নিবে।


    Laravel Collective
    composer require "laravelcollective/html":"^5.6.0"




    fetchData on route
    Route::get('/getall', function()
    {
        $fetchData = DB::select('select * from students');
        echo "<pre>";
        print_r($fetchData);
        echo "</pre>";
    });





## Laravel Request:
    It is common checking instade of checking each time on form submission
    Set custom requiremnt 
    Set conditional requirment 
    withValidator

    provider / app provider authService

    user permission can controll from here

Scope call on model for extar query










<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
