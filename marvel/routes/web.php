<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Title;
use App\Http\Controllers\Mars;
use App\Http\Controllers\NEO;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('Home');
// });
// Route::get('/',[Title::class,'index']);
Route::get('/Home',function (){

    return view('Home');

});
Route::get('/Mars',[Mars::class,'index']);
Route::get('/NEO',[NEO::class,'index']);
Route::get('/Space',function (){
    return view('Space');
});

Route::get('/Payments',function (){
    return view('Payment');
});
Route::get('/Astronauts',function (){
    return view('Astro');
});

use App\Http\Controllers\UserController;

// Route::get('/', [Usercontroller::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [Usercontroller::class, 'login'])->name('login');
Route::get('/signup', [Usercontroller::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [Usercontroller::class, 'signup'])->name('signup');
Route::get('/Home', [Usercontroller::class, 'home'])->name('home');
Route::get('/Blogs',function (){
       return view('SpaceBlogs');
});




Route::get('/cook', [HomeController::class, 'index']); // Homepage
Route::get('/set-cookie/{username}', [HomeController::class, 'setCookie']); // Set cookie route
Route::get('/delete-cookie', [HomeController::class, 'deleteCookie']); // Delete cookie route
