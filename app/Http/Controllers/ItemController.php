<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function store(Request $request){
            //dd($request);
            $validatedData = $request->validate([
                'Itemname' => ['required'],
                'Quantity' => ['required'],
                'Price' => ['required'],
                'Description' => ['required'],
                'Image' => ['required'],
            ]);
            $request->file('Image')->store('uploads');  
                                                    //for store image in uploads folder
            foreach($request->all() as $key=>$value)
            {
                echo $key ."=>" .$value;
            }
            return back()->with("message","Form Submitted");
    } 
}
