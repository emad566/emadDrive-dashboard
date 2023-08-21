<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\ProfileController;
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
});



require __DIR__.'/auth.php';
