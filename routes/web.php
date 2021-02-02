<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
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
Route::get('/{type}/show_user',[UserController::class,'showUser'])->name('admin_show_user');

// Route::get('/{type}/show_user',[UserController::class,'showUser'])->name('admin_show_user');
Route::post('/store/user',[UserController::class,'store'])->name('store.user');

//user module
Route::get('/{type}/add_item',function($type){
    return view('user.add_item',['type'=>$type]);
})->name('user_add_item');
Route::post('/additem',[ItemController::class,'store'])->name('store.item');


