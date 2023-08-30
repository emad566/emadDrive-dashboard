<?php
namespace App\Http\Controllers\Dashboard;

use App\Livewire\Captain\Captains;
use App\Livewire\Captain\Edit;
use App\Livewire\Dashboard\Home;
use App\Livewire\Passenger\Passengers;
use App\Livewire\permission\Permissions;
use App\Livewire\Property\Properties;
use App\Livewire\role\Roles;
use App\Livewire\user\Users;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', Home::class)->middleware(['auth'])->name('dashboard');

    // Localization En Ar from file ar.json
    Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

    Route::group(['prefix' => 'accounts'], function () {
        Route::get('captains', Captains::class)->name('captains.index');
        Route::get('captains/edit/{captain}', Edit::class)->name('captains.edit');
        Route::get('captains/properties', Properties::class)->name('properties.index');
        Route::get('passengers', Passengers::class)->name('passengers.index');
        Route::get('users', Users::class)->name('users.index');

        Route::group(['prefix' => 'users'], function () {
            Route::get('roles', Roles::class)->name('roles.index');
            Route::get('permissions', Permissions::class)->name('permissions.index');
        });
    });

});



require __DIR__.'/auth.php';
