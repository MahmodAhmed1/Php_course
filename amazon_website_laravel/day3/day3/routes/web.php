<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\conrtolPage;


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

use App\Http\Controllers\pageController;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [PageController::class, 'contactUs'])->name('contact');
Route::get('/about', [PageController::class, 'aboutUs'])->name('about');
Route::get('/prod', [PageController::class, 'products'])->name('prod');


Route::get('/products', [productController::class, 'index'])->name('products');
Route::get('/products/create', [productController::class, 'create'])->name('products.create');
Route::get('/products/{id}',[productController::class, 'show']);
Route::post('/products/{id}/delete',[productController::class, 'destroy']);
Route::post("/products", [productController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [productController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [productController::class, 'update'])->name('products.update');



Route::get('/categories',[categoryController::class, 'index'])->name('categories');
Route::get('/categories/{category}',[categoryController::class, 'showProducts'])->name('categories/showProducts');
