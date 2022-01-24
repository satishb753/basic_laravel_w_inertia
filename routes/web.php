<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', function(){
    dd("You are on the home screen of the application");
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::group(['middleware' => ['admin']], function(){

    Route::get('/admin-entrypoint', function(){
        dd('You are at the entrypoint of the admin portal');
    });

    Route::resources([
        'products' => ProductController::class
    ]);

    Route::get('mail-test', function(){
        $content = [
            'title' => 'Mail From Satish',
            'body' => 'This is an e-mail testing for smtp.hostinger.com'
        ];
    
        \Mail::to('satishb753@gmail.com')->send(new \App\Mail\TestMail($content));
    });
});


/** Facebook OAuth Routes */
// Route::get('/auth/facebook/redirect', [FacebookController::class,'handleFacebookRedirect']);
// Route::get('/auth/facebook/callback', [FacebookController::class,'handleFacebookCallback']);

Route::get('/test', [NotificationController::class, 'databaseQTimeTest']);

