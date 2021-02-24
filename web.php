<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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

Route::get('/user',[usercontroller::class, 'index']);
Route::post('/save',[usercontroller::class, 'save']);
Route::match(['get','post'],'/login',[usercontroller::class, 'login']);
Route::match(['get','post'],'/loginuser',[usercontroller::class, 'loginuser']);
Route::match(['get','post'],'/userlist',[usercontroller::class,'userlist']);
Route::match(['get','post'],'/edit/user/{id}',[usercontroller::class,'edit']);
Route::match(['get','post'],'/delete/user/{id}',[usercontroller::class,'delete']);
