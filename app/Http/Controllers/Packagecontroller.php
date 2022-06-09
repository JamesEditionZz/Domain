<?php

namespace App\Http\Controllers;
use App\Models\Package;

use Illuminate\Http\Request;

class Packagecontroller extends Controller
{
    function package(Request $request){
        $key = $request->key;
        return view('package',['value'=>$key]);
    }
}