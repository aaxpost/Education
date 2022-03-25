<?php

use Illuminate\Support\Facades\Route;
//xaa code
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



//Route::get('/user/{name}', [PageController::class, 'all']);

Route::get('/method1/', [UserController::class, 'show']);

Route::prefix('method')->group(function () {
    Route::get('/1', [UserController::class, 'method1']);
    Route::get('/2', [UserController::class, 'method2']);
    Route::get('/3', [UserController::class, 'method3']);
});

Route::get('/', [UserController::class, 'show']);




