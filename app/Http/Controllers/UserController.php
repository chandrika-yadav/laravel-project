<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(Request $request){
        // if user is admin

        $validatedData = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'uname' => ['required'],
            'pswd' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'remember' => ['accepted'],
        ]);

        session(['user.value'=>[]]);
        // request->all() Get Array of request
        $request->session()->push('user.value',$request->all());

        dd(session('user'));
        foreach($request->all() as $key=>$value)
        {
            echo $key ."=>" .$value;
        }
        return back()->with("message","Form Submitted");

    }
    public function showUser($type){
        session(['userType'=>$type]);
        $users = array(['name'=>'abc','password'=>'12345','email'=>'abc@gmail.com',
        'address'=>'abcghh','phone'=>'123456789'],
        ['name'=>'riya','password'=>'abnnmj12','email'=>'riya@gmail.com',
        'address'=>'abcghh','phone'=>'999201040'],
        ['name'=>'siya','password'=>'478555','email'=>'siya@gmail.com',
        'address'=>'abcghh','phone'=>'996522555']);
        return view('admin.show_user',['type'=>$type,'data'=>$users]);
    }
}
