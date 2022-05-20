<?php

use App\Http\Controllers\GuitarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');  
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('home.contacts');

Route::resource('guitars', GuitarsController::class);

Route::resource('app', AppController::class);

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    $category = request('category');

    if (isset($category)) {
        if (isset($item)) {
            return "you are viewing the store for {$category} for {$item}";
        }
        return 'you are viewing the store for ' . strip_tags($category);
    }
    return 'you are viewing the store for all items';
});

/*Route::get('/store', function () {
    $category = request('category');

    if (isset($category)) {
        return 'you are viewing the store for ' . strip_tags($category);
    }
    return 'you are viewing the store for all items';
});*/
