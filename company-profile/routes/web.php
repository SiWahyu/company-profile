<?php

use App\Http\Controllers\KontakController;
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
Route::get('/about', function () {
    return view('about');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/comments', [KontakController::class,'index']);

Route::get('/contact', [KontakController::class,'create']);

Route::post('/contact/store',[KontakController::class,'store']);

Route::get('/comments/{id}/edit', [KontakController::class, 'edit']);

Route::put('/comments/{id}', [KontakController::class, 'update']);

Route::delete('/comments/{id}/delete', [KontakController::class, 'delete']);
