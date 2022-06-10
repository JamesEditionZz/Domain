<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Package;

class Packagecontroller extends Controller
{
    function package(Request $request){
        $key = $request->key;
        return view('package',['value'=>$key]);
    }
}