<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);  

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/book_categories', [AdminController::class, 'view_category']);  

Route::post('/add_category', [AdminController::class, 'add_category']);  

Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);  

Route::get('/view_product_form', [AdminController::class, 'view_product_form']);  

Route::post('/add_product', [AdminController::class, 'add_product']);  

Route::get('/show_product', [AdminController::class, 'show_product']);  

Route::get('/update_product/{id}', [AdminController::class, 'update_product']);  

Route::post('/edit_product/{id}', [AdminController::class, 'edit_product']);  

Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);  
