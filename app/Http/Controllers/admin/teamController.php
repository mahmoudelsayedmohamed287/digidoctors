<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\team;
use DB;

class teamController extends Controller
{
    public function index(){
        $teams = team::all();
        return view('admin.allteam')->with('teams',$teams);

    }

    public function create(){
        
        return view('admin.addteam');
    }

    public function add(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
      $teams = new team;
        $teams->name = $request->name;
        $teams->description = $request->description;
        $teams->socialmedia = $request->socialmedia;
        $teams->image = $target;  
        $teams->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminteam');


    }

    public function edit($id){ 
       
      $team = team::find($id);
     return view('admin.editteam')->with('team',$team);
       


    }

    
    public function update(Request $request,$id){
      
        $teams = team::find($id);
     if(!empty($_FILES['mainimg']['name'])){

        
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        
        $teams->name = $request->name;
        $teams->description = $request->description;
        $teams->socialmedia = $request->socialmedia;
        $teams->image = $target; 
        $teams->update();
    
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
    
        return redirect('adminteam');
     }else{

        
        $teams->name = $request->name;
        $teams->description = $request->description;
        $teams->socialmedia = $request->socialmedia;
        $teams->update();
        return redirect('adminteam');

     }

    }
    public function delete($id){
        $teams = team::find($id);
        $teams->delete();
        return redirect('adminteam');

    }
}
