<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\UserController;
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

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('panel.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/post/{id}', function () {
    return view('post');
})->name('post');

Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

require __DIR__.'/auth.php';

Route::resource('/panel/users', UserController::class);