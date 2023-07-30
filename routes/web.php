<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


// page route

Route::get('/',[\App\Http\Controllers\PotfolioController::class,'page']);
Route::get('/About',[\App\Http\Controllers\AboutController::class,'page']);
Route::get('/Contact',[\App\Http\Controllers\ContactController::class,'page']);
Route::get('/Services',[\App\Http\Controllers\ServiceController::class,'page']);
Route::get('/GALLERY',[\App\Http\Controllers\GalleryController::class,'page']);



// data route
Route::get('/Testimonial_Data',[\App\Http\Controllers\PotfolioController::class,'Testimonial_Data']);
Route::get('/gallery_Data',[\App\Http\Controllers\PotfolioController::class,'gallery_Data']);
Route::get('/social_Data',[\App\Http\Controllers\PotfolioController::class,'social_Data']);
Route::get('/priceData',[\App\Http\Controllers\ServiceController::class,'priceData']);
