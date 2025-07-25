<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyVoyagerController;
use App\Http\Controllers\PageController;
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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::post('orderFiles/{table}/{field}/{id}', [MyVoyagerController::class,'orderFiles'])->name('voyager.orderFiles');
    Route::post('orderImages/{table}/{field}/{id}', [MyVoyagerController::class,'orderImages'])->name('voyager.orderImages');
});
Route::post('search', [PageController::class, 'search'])->name('search');
Route::post('store', [PageController::class, 'store'])->name('store');
Route::post('floors', [PageController::class, 'floors'])->name('floors');
Route::post('apartments', [PageController::class, 'apartments'])->name('apartments');


Route::get('sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('{slug}', [PageController::class,'index'])->name('page');
Route::get('proje/{slug}', [PageController::class,'detail'])->name('project');
Route::get('haber/{slug}', [PageController::class,'detail'])->name('news');
Route::get('blog/{slug}', [PageController::class,'detail'])->name('blog');


