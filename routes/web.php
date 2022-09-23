<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
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

Route::get('/post/{name}', [PostController::class, 'index']);

 Route::get('/service/{name}/{address}', [ServiceController:: class, 'index']);


 Route::resource('user', PostController::class)->except(['index', 'delete']);

 Route::controller(PostController::class) ->group(function(){
    Route::get('/index', 'index');
    Route::get('/create', 'create');
    Route::get('/store', 'store');
    Route::get('/change', 'edit');
     
});