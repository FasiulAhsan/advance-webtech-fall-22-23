<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Api\AgencyAuthControllerApi;
use  App\Http\Controllers\Api\TourPackageControllerApi;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post ('/register',[AgencyAuthControllerApi::class,'Register']);
Route::post ('/login',[AgencyAuthControllerApi::class,'Login']);

Route::get ('/package-lists',[TourPackageControllerApi::class,'package_list']);

Route::post ('/savepackage',[TourPackageControllerApi::class,'savePackage']);

Route::get('/delete-package/{id}' , [TourPackageControllerApi::class,'deletePackage']);

Route::get('/package_edit/{id}',[TourPackageControllerApi::class,'package_edit']);
Route::put('/package_edit_submit/{id}',[TourPackageControllerApi::class,'updatePackage']);


Route::get('/profile',[AgencyAuthControllerApi::class, 'profile']);
 

 // testing part 
 Route::get('/all' , [AgencyAuthControllerApi::class,'all_packages'])->name ('package-list');