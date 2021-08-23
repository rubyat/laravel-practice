<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[DashboardController::class, 'index'])->name('dashboard.index');


//Route::get('/show/{story:slug}',[DashboardController::class, 'show'])->name('dashboard.show');


//Route::get('/stat_story',[DashboardController::class, 'show'])->name('dashboard.page');

Route::get('/test', function () {
    dd(config('app.developer'));
});


//Route::get('/layout', 'TestsController@index');
//Route::get('/layout', [TestsController::class, 'index']);


Route::get('/layout',[TestsController::class, 'index']);


Route::get('/custom_cinfig', function () {
    //dd(config('blog.administrators'));
    dd(env('DB_DATABASE'));
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function(){
    // Route::get('/stories',[StoriesController::class, 'index'])->name('stories.index');
    // Route::get('/stories/show/{story}',[StoriesController::class, 'show'])->name('stories.show');

    //Route::resource('stories', StoriesController::class);

    Route::resource('stories', StoryController::class);

});


Route::get('/mail',[DashboardController::class, 'sendMail'])->name('dashboard.mail');
Route::get('/{story:slug}',[DashboardController::class, 'show'])->name('dashboard.show');
//Route::get('/{slug}',[DashboardController::class, 'show'])->name('page.page');


