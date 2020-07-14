<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\posts;
use DB;

class postsController extends Controller
{
    public function index(){
        $posts = posts::all();
        return view('admin.allposts')->with('posts',$posts);

    }

    public function create(){
        
        return view('admin.addpost');
    }

    public function add(Request $request){

        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $posts = new posts;
        $posts->title = $request->title;
        $posts->information = $request->information; 
        $posts->image = $target; 
        $posts->save();

        

        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminposts');



    }

    public function edit($id){ 
       
      $post = posts::find($id);
     return view('admin.editpost')->with('post',$post);
       


    }

    
    public function update(Request $request,$id){
      
        $posts = posts::find($id);
        if(!empty($_FILES['mainimg']['name'])){
   
           
           $image = $_FILES['mainimg']['name'];
           $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->image = $target;
        $posts->update();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
    
        return redirect('adminposts');
         } else{
            $posts->title = $request->title;
            $posts->information = $request->information;
        
        
            $posts->update();
            return redirect('adminposts');
    
        }
    }

    public function publish(Request $request){
        $stat = $request->stat;
	   $id = $request->id;
	
	if($stat == 0){

	DB::table('posts')->where('id',$id)->update([
		'status'	 =>   1
		]);
		
	}else if($stat == 1){
		
		DB::table('posts')->where('id',$id)->update([
			'status'	 =>   0
			]);
	}
		return redirect('adminposts');

	}
   

    
    public function delete($id){
        $posts = posts::find($id);
        $posts->delete();
        return redirect('adminposts');

    }
}
