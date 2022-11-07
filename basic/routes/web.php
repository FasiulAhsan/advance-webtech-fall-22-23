<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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
Route::get('/h', function () {
    return "<h1>Hello</h1>";
});

Route::get('/home', [PagesController::class, 'Index'])->name('home');
Route::get('/profile',[PagesController::class, 'Profile'])->name('profile');
Route::get('/other',[PagesController::class, 'Other'])->name('other');


//Advanced Routing
Route::get('/user/{id}', function($id)
{	return"<b>The passed id is ".$id."</b>";
});

//Passing value from view to Controller
Route::get('/registration',[ PagesController::class, 'registration']);
Route::post('/register', [PagesController::class, 'register']);



Route::get('/list', [StudentController::class, 'list'])->name('studentlist');
Route::get('/studentEdit/{id}/{name}',[StudentController::class, 'studentEdit'])->name('studentEdit');


Route::get('/studentCreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate', [StudentController::class, 'studentCreatesubmitted'])->name('studentCreate');