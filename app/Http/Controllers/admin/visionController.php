<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\vision;
use DB;

class visionController extends Controller
{
    public function index(){
        $visions = vision::all();
        return view('admin.allvision')->with('visions',$visions);

    }

    
    public function edit($id){ 
       
        $vision = vision::find($id);
       return view('admin.editvision')->with('vision',$vision);
         
  
  
      }

      public function update(Request $request,$id){
      
        $visions = vision::find($id);
     if(!empty($_FILES['mainimg']['name'])){

        
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        
        $visions->body = $request->body;
        $visions->image = $target; 
        $visions->update();
    
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
    
        return redirect('adminvisions');
     }else{

        $visions->body = $request->body;
        
        $visions->update();
        return redirect('adminvisions');

     }

    }
}
