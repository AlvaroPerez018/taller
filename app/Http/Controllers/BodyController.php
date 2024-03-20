<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function create3(){

        return view('Body');

    }

    public function store(Request $request){
        $Body = new Body();
        $Body->name=$request->name;  
        $Body->denomination=$request->denomination;
        $Body->save();

        return $Body;

    }
}
