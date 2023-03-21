<?php

use App\Http\Controllers\Company\WelcomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Company\ProfileController;
use App\Http\Controllers\Company\ReservationController;
use App\Http\Controllers\Company\subscriberController;
use Illuminate\Support\Facades\Route;


// login route
Route::prefix('login/')->name('login.')->controller(LoginController::class)->group(function () {
    Route::get('', 'showCompanyLoginForm')->name('show'); // companies.login.show
    Route::post('', 'CompanyLogin')->name('store'); // companies.login.store
});

// register
Route::prefix('register/')->name('register.')->controller(RegisterController::class)->group(function () {
    Route::get('', 'showCompanyRegisterForm')->name('show'); // companies.register.show
    Route::post('', 'companyRegister')->name('store');
});

// welcome route
Route::controller(WelcomeController::class)->middleware(['auth:company'])->group(function () {
    Route::get('', 'index')->name('welcome'); // admins.welcome
});

// profile route
Route::prefix('profile/')->name('profiles.')->controller(ProfileController::class)->middleware(['auth:company'])->group(function(){
    Route::get('', 'index')->name('index'); // admins
    Route::put('{company}', 'update')->name('update');
});

// Reservation route
Route::prefix('reservation/')->name('reservation.')->controller(ReservationController::class)->middleware('auth:company')->group(function () {
    Route::get('', 'index')->name('index');
});

// subscriber Route
Route::prefix('subscriber/')->name('subscriber.')->controller(SubscriberController::class)->middleware('auth:company')->group(function () {
    Route::get('', 'index')->name('index');
});
