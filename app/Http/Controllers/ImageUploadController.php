<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\temtheme;
use App\Models\tembusiness;
use App\Models\temweb;

class ImageUploadController extends Controller
{
    //Add image
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request){
        $data= new temtheme();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        
        if($request){
            $request->validate([
                'business' => 'required',
                'web' => 'required',
                'linkweb'=>'required'
            ]);
            $theme = new temtheme;
            $theme->business_id = $request->business;
            $theme->web_id = $request->web;
            $theme->linkweb = $request->linkweb;
            $theme->image = $data['image'];
            $theme->save();
        }
        return redirect()->route('table.add');
       
    }
	//View post
    public function viewImage(){
        $imageData= temtheme::all();
        return view('view_image', compact('imageData'));
    }

    public function table(){
        $data['business'] = tembusiness::all();
        $data['temweb'] = temweb::all();

        return view('add_image',$data);
    }
}