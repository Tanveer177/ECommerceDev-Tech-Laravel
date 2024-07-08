<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Api\HookMethods;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



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
Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[HomeController::class,'redirect'])->name('dashboard');;
});
// routes/web.php
// Route::get('/delete_user/{id}', 'AdminController@deleteUser')->name('delete_user');

Route::get('/delete_user/{id}', [AdminController::class,'delete_user'])->name('delete_user');
Route::get('/view_product', [AdminController::class,'view_product']);


Route::get('/show_product',[AdminController::class,'show_product']);

Route::post('/add_product',[AdminController::class,'add_product']);


// Route::get('/delete_user/{id}', [AdminController::class, 'delete_user']);
Route::get ('/view_users',[AdminController::class,'users_view']);
// Route::get('logout',[AdminController::class, 'logout']);
Route::get('/view_dashboard',[AdminController::class,'view_dashboard']);


Route::get('/view_about',[HomeController::class,'view_about']);
Route::get('/add-to-cart', [HomeController::class,'addToCart']);









