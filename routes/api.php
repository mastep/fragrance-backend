	<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('forms')->group(function () {
    /*Route::get('/register', function () {
        return view('forms.register', ['name' => 'Finn']);
    });*/
    Route::get('/register', [\App\Http\Controllers\Forms\RegisterController::class,'index']);
    Route::post('/register', [\App\Http\Controllers\Forms\RegisterController::class,'store']);
});
