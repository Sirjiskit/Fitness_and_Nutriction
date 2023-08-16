<?php

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
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/details/{details}', [HomeController::class, 'details'])->name('details');
Route::post('/constact', [HomeController::class, 'constact'])->name('constact');

