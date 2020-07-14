<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\digicore;
use DB;

class missionController extends Controller
{
    public function index(){
        $missions = digicore::all();
        return view('admin.allmission')->with('missions',$missions);

    }

    public function create(){
        
        return view('admin.addmission');
    }

    
    public function edit($id){ 
       
        $mission = digicore::find($id);
       return view('admin.editmission')->with('mission',$mission);
         
  
  
      }

      public function update(Request $request,$id){
      
        $missions = digicore::find($id);
     if(!empty($_FILES['mainimg']['name'])){

        
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        
        $missions->title = $request->title;
        $missions->description = $request->description;
        $missions->image = $target; 
        $missions->update();
    
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
    
        return redirect('admincore');
     }else{

        $missions->title = $request->title;
        $missions->description = $request->description;
        
        $missions->update();
        return redirect('admincore');

     }}

     public function add(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $missions = new digicore;
        $missions->title = $request->title;
        $missions->description = $request->description; 
        $missions->image = $target;  
        $missions->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('admincore');


    }

    

    public function delete($id){
        $missions = digicore::find($id);
        $missions->delete();
        return redirect('admincore');

    }
}
