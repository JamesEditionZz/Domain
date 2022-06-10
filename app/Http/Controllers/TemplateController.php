<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    function index(Request $request){
        $key = $request->key;
        return view('template',['value'=>$key]);
    }
}
