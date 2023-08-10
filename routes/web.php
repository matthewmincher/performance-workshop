<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlowController;

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

Route::get('/', static function () {
    return view('index');
});
Route::get('/info', static function () {
    phpinfo();
});
Route::get('/slowcontroller', [SlowController::class, 'index']);
Route::get('/slowcontroller/promos', [SlowController::class, 'promos']);
