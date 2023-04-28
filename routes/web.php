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

Route::prefix('home')->group(function () {
   
});

Route::prefix('admin')->group(function () {
   
    Route::get('/acceuil', [App\Http\Controllers\AdminController::class, 'acceuil'])->name('acceuil');  

    Route::get('ajouter', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::post('engistrer', [App\Http\Controllers\AdminController::class, 'store'])->name('store.candidat');

    Route::get('candidat', [App\Http\Controllers\AdminController::class, 'list_candidat'])->name('list_candidat');
    Route::get('supprimer-candidat/{id}',[App\Http\Controllers\AdminController::class, 'destroy'] )->name('destroy');
    Route::get('modifier-candidat/{id}',[App\Http\Controllers\AdminController::class, 'edit'] )->name('edit');
    Route::post('modifier-candidat/{id}',[App\Http\Controllers\AdminController::class, 'update'] )->name('update.candidat');
    Route::get('electeur', [App\Http\Controllers\AdminController::class, 'list_electeur'])->name('list_electeur');
});
