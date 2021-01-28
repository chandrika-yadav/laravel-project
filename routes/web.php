<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/{type}',function($type){
    return view('Layouts.index',['type'=>$type]);
})->name('index');
Route::get('/{type}/add_user',function($type) {
     return view('admin.add_user',['type'=>$type]);
})->name('admin_add_user');
Route::get('/{type}/show_user',function($type) {
    return view('admin.show_user',['type'=>$type]);
})->name('admin_show_user');
Route::post('/store/user',[UserController::class,'store'])->name('store.user');

