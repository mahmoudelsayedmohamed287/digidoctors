<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\clients;
use DB;
class clientController extends Controller
{
    public function index(){
        $clients = clients::all();
        return view('admin.allclients')->with('clients',$clients);

    }

    public function create(){
        
        return view('admin.addclient');
    }

    public function add(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $clients = new clients;
        $clients->name = $request->name;
        $clients->image = $target;  
        $clients->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminclients');


    }

    public function edit($id){ 
       
      $client = clients::find($id);
     return view('admin.editclient')->with('client',$client);
       


    }

    
    public function update(Request $request,$id){
      
        $clients = clients::find($id);
     if(!empty($_FILES['mainimg']['name'])){

        
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        
        $clients->name = $request->name;
        $clients->image = $target; 
        $clients->update();
    
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
    
        return redirect('adminclients');
     }else{

        
        $clients->name = $request->name;
        $clients->update();
        return redirect('adminclients');

     }

    }
    public function delete($id){
        $clients = clients::find($id);
        $clients->delete();
        return redirect('adminclients');

    }
}
