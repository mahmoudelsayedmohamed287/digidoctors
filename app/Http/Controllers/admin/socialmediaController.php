<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\socialmedia;
use DB;

class socialmediaController extends Controller
{
    public function index(){
        $media = socialmedia::all();
        return view('admin.allsocialmedia')->with('media',$media);

    }

    public function create(){
        
        return view('admin.addsocialmedia');
    }

    public function add(Request $request){
       
      $media = new socialmedia;
        $media->facebook = $request->facebook;
        $media->twitter = $request->twitter;
        $media->instgram = $request->instgram;
        $media->whatsapp = $request->whatsapp;
        $media->linkedin = $request->linkedin;
        $media->save();
       

        return redirect('adminmedia');


    }

    public function edit($id){ 
       
      $media = socialmedia::find($id);
     return view('admin.editsocialmedia')->with('media',$media);
       


    }

    
    public function update(Request $request,$id){

        $media = new socialmedia;
        $media->facebook = $request->facebook;
        $media->twitter = $request->twitter;
        $media->instgram = $request->instgram;
        $media->whatsapp = $request->whatsapp;
        $media->linkedin = $request->linkedin;

        $media->update();
       

        return redirect('adminmedia');

    }
    public function delete($id){
        $media = socialmedia::find($id);
        $media->delete();
        return redirect('adminmedia');

    }
}
