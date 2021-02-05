<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

Route::get('session_test',function(Request $request){
    // session();
    // Session::get();
    // $request->session();
    session(['test'=>'This is test Session']);
    Session::put('test2',"SEssion 2 value");



    $request->session()->flash('status','welcome');

    $request->session()->increment('count',$incrementBy=3);

    $request->session()->decrement('count',$decrementBy=4);


    echo "session Store";


});


Route::get('delete',function(Request $request){
   $request->session()->forget('test');
//    $request->session()->flush();
   echo "Session Delete";
});

Route::get('flash_test',function(Request $request){
    dump(session('status'));
    // dump(Session::has('test'));
    dump(session('count'));
    //
    $value =session('test');
    dump($value);

    dump(Session::get('test2'));
});
Route::get('file',function(){
    Storage::disk('public')->put('test.txt',"Hello World!");
    return Storage::get('test.txt');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');

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
Route::get('/{type}',function($type){
    return view('Layouts.index',['type'=>$type]);
})->name('index');




