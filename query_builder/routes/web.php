<?php

use App\Http\Controllers\PostController;
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
});

Route::get('/getExcerptDescription', [PostController::class, 'getExcerptDescription']);
Route::get('/firstRecordDescription', [PostController::class, 'firstRecordDescription']);
Route::get('/getDescription', [PostController::class, 'getDescription']);
Route::get('/getAllTitle', [PostController::class, 'getAllTitle']);
Route::post('/insertPost', [PostController::class, 'insertPost']);
Route::patch('/update', [PostController::class, 'update']);
Route::delete('/delete', [PostController::class, 'delete']);
Route::get('/getPostByMinRead', [PostController::class, 'getPostByMinRead']);
Route::post('/increments', [PostController::class, 'increments']);
