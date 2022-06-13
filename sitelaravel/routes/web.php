<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

Route::get('/default', function () {
    return view('layouts.default');
});


Route::get('/admin', function () {
    if (! Gate::allows('access-admin')) {
        return 'ACCESS DENIED';
    }
    return view('admin');

});


Route::post('/update', [ProductController::class, 'update'])->name('product.update');

Route::post('/store', [ProductController::class, 'store'])->name('product.store');

Route::post('/edit', [ProductController::class, 'edit'])->name('product.edit');



require __DIR__.'/auth.php';

Route::get('/navigation', function ()   {
    return view('layouts.navigation');

});
