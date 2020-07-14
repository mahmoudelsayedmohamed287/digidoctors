<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use App\posts;
use App\contactus;
use DB;
class commentController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->where('status',1)->get();
        $contactus = contactus::all();
        
       
        return view('comments')->with('data',['posts'=>$posts,'contactus'=>$contactus]);
        

    }

    public function recentpost($id){
        $posts = posts::find($id);
        $recent = DB::table('posts')->orderBy('id', 'DESC')->take(5)->get();
       
       
         return view('recentpost', compact('posts', 'recent'));
         

    }


}
