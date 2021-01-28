<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(Request $request){
        //dd($request);
        foreach($request->all() as $key=>$value)
        {
            echo $key ."=>" .$value;
        }
    }
}
