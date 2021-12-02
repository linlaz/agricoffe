<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\MenuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/', [MenuController::class, 'index'])->name('dashboard');
});
Route::group(['prefix' => 'blogs', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/', [blogController::class, 'index'])->name('blogs');
    Route::get('/createblog',[blogController::class, 'create'])->name('createblog');
});

