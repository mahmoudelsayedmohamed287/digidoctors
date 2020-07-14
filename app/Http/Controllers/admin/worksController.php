<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\works;
use DB;

class worksController extends Controller
{
    public function index(){
        $works = works::all();
        return view('admin.allworks')->with('works',$works);

    }

    public function create(){
        
        return view('admin.addwork');
    }

    public function add(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
      $works = new works;
        $works->name = $request->name;
        $works->information = $request->information;
        $works->image = $target;  
        $works->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
        

        return redirect('adminworks');


    }

    public function edit($id){ 
       
      $work = works::find($id);
     return view('admin.editwork')->with('work',$work);
       


    }

    
    public function update(Request $request,$id){
      
        $works = works::find($id);
  
        if(!empty($_FILES['mainimg']['name'])){

        
            $image = $_FILES['mainimg']['name'];
            $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $works->name = $request->name;
        $works->information = $request->information;
        $works->image = $target; 
        $works->update();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
      
    
        return redirect('adminworks');
    }else{

        
        $works->name = $request->name;
        $works->information = $request->information;
        $works->update();
        return redirect('adminworks');

     }
    }
    public function delete($id){
        $works = works::find($id);
        $works->delete();
        return redirect('adminworks');

    }
}
