<?php
namespace App\Http\Controllers\Dashboard;

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
    Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

    // Localization En Ar from file ar.json
    Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

    Route::resource('captains', CaptainController::class);
    Route::get('passengers', PassengerController::class)->name('passengers.index');
    Route::get('users', UserController::class)->name('users.index');
    Route::get('roles', RoleController::class)->name('roles.index');
});



require __DIR__.'/auth.php';
