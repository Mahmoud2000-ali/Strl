<?php

use App\Http\Controllers\Customer\CompanyController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Customer\ReservationController;
use App\Http\Controllers\Customer\WelcomeController;
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

// welcome controller
Route::get('/', [WelcomeController::class,'index'])->name('welcome');


// profile route
Route::prefix('profile/')->name('profiles.')->controller(ProfileController::class)->group(function(){
    Route::get('', 'index')->name('index');
    Route::put('{client}', 'update')->name('update');
});


// reservation route
Route::prefix('reservation/')->name('reservations.')->controller(ReservationController::class)->group(function(){
    Route::get('', 'index')->name('index');
    Route::post('', 'store')->name('store');
});


// route to get the building to company
Route::get('company/{company}/buildings', [CompanyController::class, 'show'])->name('companies.buildings');
Route::get('company/buildings/{building}/lockers', [CompanyController::class, 'availableLocker'])->name('companies.lockers');
