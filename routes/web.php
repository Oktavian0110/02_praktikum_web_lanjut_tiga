<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class.'index']);

Route::prefix('products')->group(function(){
    Route::get('/Marble1', [ProductsController:: class, 'marble1']);
    Route::get('/Marble2', [ProductsController:: class, 'marble2']);
    Route::get('/riri', [ProductsController:: class, 'riri']);
    Route::get('/kolak', [ProductsController:: class, 'kolak']);
    Route::get('/kabi', [ProductsController:: class, 'kabi']);
    Route::get('/Marble3', [ProductsController:: class, 'marble3']);
    Route::get('/keong', [ProductsController:: class, 'keong']);
});

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController:: class, 'karir']);
    Route::get('/magang', [ProgramController:: class, 'magang']);
    Route::get('/industri', [ProgramController:: class, 'industri']);
});

Route::get('/news', [NewsController:: class, 'News']);

Route::get('/about', [AboutController:: class, 'about']);

Route::get('/contact', [ContactController:: class, 'contact']);
