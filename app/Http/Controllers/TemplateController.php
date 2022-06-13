<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TemplateController extends Controller
{
    function index(){
        $business=DB::table('tembusinesses')->get();
        return view('template')->with('business',$business);
    }
    function fetch(Request $request){
        $id = $request->get('select');
        $result = array();
        $query = DB::table('tembusinesses')
        ->join('temwebs','tembusinesses.id','=','temwebs.business_id')
        ->where('tembusinesses.id',$id)
        ->groupBy('temwebs.web_id')
        ->get();

        if($id == '1'){
            $output = '<option value=""></option>';
        }elseif($id >= '2'){
            $output = '<option value="">เลือกประเภทเว็ปไซต์</option>';
        foreach ($query as $row){
            $output.='<option value ="'.$row->web_id.'">'.$row->name_web.'</option>';
            }
            echo $output;
        }  
    }
}
