<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyAuthController;
use App\Http\Controllers\tourPackageController;


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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/elements', function () {
    return view('elements');
});

//Log In
Route::get('/login',[AgencyAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::post('/login-user',[AgencyAuthController::class, 'loginUser'])->name('login-user');



//Registration

Route::get('/registration',[AgencyAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[AgencyAuthController::class, 'registerUser'])->name('register-user');

//Dashboard
Route::get('/dashboard',[AgencyAuthController::class, 'dashboard'])->middleware('isLogedIn');

//Log Out
Route::get('/logout',[AgencyAuthController::class, 'logout'])->name('logout');

//Add Package
Route::get('/tourPackagelist',[tourPackageController::class, 'tourPackage'])->name('tourPackagelist');
