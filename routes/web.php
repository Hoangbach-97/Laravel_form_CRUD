<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestarantController;

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

Route::get('/', [RestarantController::class, 'index']);
Route::get('/list', [RestarantController::class, 'list']);
Route::view('/add', 'add');
Route::post('/add', [RestarantController::class, 'add']);
Route::get('/delete/{id}',[RestarantController::class,'delete']);

Route::get('/edit/{id}', [RestarantController::class, 'edit']);
// Route::post('/edit/{id}',[RestarantController::class, 'edit']);
Route::post('/saveedit/{id}', [RestarantController::class, 'saveedit']);



