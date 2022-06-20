<?php

namespace App\Http\Controllers;

use public\css\img;

use Illuminate\Http\Request;
use DB;

class TemplateController extends Controller
{
    function index(){
        $business=DB::table('tembusinesses')->get();
        // $img = DB::table('temthemes')->get();
        return view('dashboard')->with('business',$business);
        // return view('template')->with('image',$img);
    }

    function fetch(Request $request){
        $id = $request->get('select');
        $result = array();
        $query = DB::table('tembusinesses')
        ->join('temwebs','tembusinesses.id','=','temwebs.business_id')
        ->where('tembusinesses.id',$id)
        ->groupBy('temwebs.web_id')
        ->get();

            $output = '<option value="">เลือกประเภทเว็ปไซต์</option>';
        foreach ($query as $row){
            $output.='<option value ="'.$row->web_id.'">'.$row->name_web.'</option>';
            }
            echo $output;
    }

    function img(Request $request){
        $idweb = $request->get('selectweb');
        $resultimg = array();
        $query = DB::table('temwebs')
        ->join('temthemes','temwebs.web_id','=','temthemes.web_id')
        ->where('temwebs.web_id',$idweb)
        ->groupBy('temthemes.id')
        ->get();
        
        $outimg = '';
            foreach ($query as $row){
        $outimg.='<a href="'.$row->linkweb.'"><img src="'.url('public/Image/'.$row->image).'"></a>';
            }
        echo $outimg;
    } 
}