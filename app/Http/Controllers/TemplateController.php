<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\temtheme;
use App\Models\tembusiness;
use App\Models\temweb;

class TemplateController extends Controller
{
    public function index(){
        $imageData= temtheme::all();
        $data['business'] = tembusiness::all();
        $data['temweb'] = temweb::all();
        return view('template', compact('imageData'),$data);
    }
}
