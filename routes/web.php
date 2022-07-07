<?php

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
Route::view('/upload','upload.index');

Route::get('/', function () {
    return view('welcome');
});

Route::post('/store', [App\Http\Controllers\DocumentController::class, "store"]);
Route::post('/signature', [App\Http\Controllers\SignatureController::class, "upload"])->name('signature.upload');

Route::get('/signature', [App\Http\Controllers\SignatureController::class, "show"]);
Route::post('/store', [App\Http\Controllers\ContentController::class, "store"])->name('content.store');
Route::get('/content', [App\Http\Controllers\ContentController::class, "show"]);
