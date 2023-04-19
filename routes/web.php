<?php

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
*/;

Route::redirect('/', '/home', 301);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\Auth_adminController::class, 'index'])->name('loginAdmin');
Route::post('/acceuil', [App\Http\Controllers\Auth_adminController::class, 'customLogin'])->name('login.custom');  
Route::get('/signout', [App\Http\Controllers\Auth_adminController::class, 'signOut'])->name('signout');

Route::get('ajouter', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
Route::post('engistrer', [App\Http\Controllers\AdminController::class, 'store'])->name('store.candidat');