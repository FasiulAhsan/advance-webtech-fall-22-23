<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudOperationController;

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

Route::get('user-list', [crudOperationController::class, 'index'])->name('user-list');
Route::get('edit-user/{id}', [crudOperationController::class, 'editUser']);

Route::post('update-user', [crudOperationController::class, 'updateUser']);

Route::get('delete-user/{id}', [crudOperationController::class, 'deleteUser']);
