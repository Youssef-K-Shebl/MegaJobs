<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\UsersController;
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

Route::get('/dashboard', [JobsController::class, 'showAll']);

Route::get('/dashboard/add', [JobsController::class, 'create']);

Route::post('/dashboard/add/store', [JobsController::class, 'store']);
