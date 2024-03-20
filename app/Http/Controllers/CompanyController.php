<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create4(){

        return view('Company');

    }

    public function store(Request $request){
        $Company = new Company();
        $Company->Activity=$request->Activity;  
        $Company->save();

        return $Activity;

    }
}
