<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\temtheme;

class TemplateController extends Controller
{
    function index(Request $request){
        $key = $request->key;
        return view('template',['value'=>$key]);
    }

}
