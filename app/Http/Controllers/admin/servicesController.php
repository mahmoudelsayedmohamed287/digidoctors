<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services;
use DB;

class servicesController extends Controller
{
    public function index(){
        $services = services::all();
        return view('admin.allservice')->with('services',$services);

    }

    public function create(){
        
        return view('admin.addservice');
    }

    public function add(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
      $services = new services;
        $services->name = $request->name;
        $services->description = $request->description;
        $services->price = $request->price;
        $services->image = $target;  
        $services->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminservice');


    }

    public function edit($id){ 
       
      $service = services::find($id);
     return view('admin.editservice')->with('service',$service);
       


    }

    
    public function update(Request $request,$id){
      
        $services = services::find($id);
     if(!empty($_FILES['mainimg']['name'])){

        
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        
        $services->name = $request->name;
        $services->description = $request->description;
        $services->price = $request->price;
        $services->image = $target; 
        $services->update();
    
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
    
        return redirect('adminservice');
     }else{

        
        $services->name = $request->name;
        $services->description = $request->description;
        $services->price = $request->price;
        $services->update();
        return redirect('adminservice');

     }

    }
    public function delete($id){
        $services = services::find($id);
        $services->delete();
        return redirect('adminservice');

    }
}
