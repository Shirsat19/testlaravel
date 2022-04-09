<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/home/test', function () {
    return App::make('App\Http\Controllers\TestController')->index();
});

Route::get('/update/{url}', function ($url) {
    return App::make('App\Http\Controllers\TestController')->dynamic($url);
});

Route::get('/', function () {
    return view('Home');
});

Route::post('/insert', [TestController::class, 'insert']);

Route::post('/update1/{id}', [TestController::class, 'update']);





