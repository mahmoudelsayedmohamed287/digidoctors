<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contactus;
use DB;

class contactusController extends Controller
{
    public function index(){
        $contacts = contactus::all();
        return view('admin.allcontact')->with('contacts',$contacts);

    }

    public function create(){
        
        return view('admin.addcontact');
    }

    public function add(Request $request){
       
        $contacts = new contactus;
        $contacts->email = $request->email;
        $contacts->message = $request->message;  
        $contacts->save();
        

        return redirect('admincontacts');


    }

    public function edit($id){ 
       
      $contact = contactus::find($id);
     return view('admin.editcontact')->with('contact',$contact);
       


    }

    
    public function update(Request $request,$id){
      
        $contacts = contactus::find($id);
        
        $contacts->email = $request->email;
        $contacts->message = $request->message;  
       
        $contacts->update();
    
  
    
        return redirect('admincontacts');
  


    }
   
}
