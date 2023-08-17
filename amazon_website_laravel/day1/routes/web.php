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

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [PageController::class, 'contactUs'])->name('contact');
Route::get('/about', [PageController::class, 'aboutUs'])->name('about');
Route::get('/prod', [PageController::class, 'products'])->name('prod');
