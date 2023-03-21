<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\WelcomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// welcome admin
Route::controller(WelcomeController::class)->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('welcome'); // admins.welcome
});

// login route
Route::prefix('login/')->name('login.')->controller(LoginController::class)->group(function () {
    Route::get('', 'showAdminLoginForm')->name('show'); // admin.login.show
    Route::post('', 'adminLogin')->name('store'); // admin.login.store
});


// client controller
Route::prefix('clients/')->name('clients.')->controller(ClientController::class)->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index'); // admins.clients.index
    Route::get('/create', 'create')->name('create'); // admins.clients.create
    Route::post('/store', 'store')->name('store'); // admins.clients.store
    Route::get('/{client}/edit', 'edit')->name('edit'); // admins.clients.edit
    Route::put('/{client}/update', 'update')->name('update'); // admins.clients.update
    Route::delete('/{client}/destroy', 'destroy')->name('destroy'); // admins.clients.destroy
});


// company controller
Route::prefix('/companies')->name('companies.')->controller(CompanyController::class)->middleware('auth:admin')->group(function(){
    Route::get('', 'index')->name('index'); // admins.companies.index
    Route::get('/create', 'create')->name('create'); // admins.companies.create
    Route::post('/store', 'store')->name('store'); // admins.companies.store
    Route::delete('/{company}/destroy', 'destroy')->name('destroy'); // admins.companies.destroy
    Route::get('/{company}/notification', 'createNotify')->name('createNotify'); // admins.companies.createNotify
    Route::post('/{company}/notification', 'storeNotify')->name('storeNotify'); // admins.companies.storeNotify
});
