<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\clients;
use App\about;
use App\posts;
use App\services;
use App\works;
use App\slider;
use App\vision;
use App\whyus;
use App\team;
use App\importantclient;
use DB;

class summeryController extends Controller
{
    public function index(){
       
            $abouts = about::all();
            $vessions = vision::all();
            $whyus = whyus::all();
            $services = services::all();
            $works = works::all();
            $clients = clients::all();
            $teams = team::all();
            $sliders = slider::all();
            $importantclient = importantclient::all();
    
            return view('admin.summery')->with('data',['abouts'=>$abouts,'sliders'=>$sliders,'vessions'=>$vessions,'whyus'=>$whyus,'importantclient'=>$importantclient,'teams'=>$teams,'services'=>$services,'works'=>$works,'clients'=>$clients]);
    
        }
        public function createimportant(){
        
            return view('admin.addsummeryimportant');
        }
        
    public function addimportant(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $importantclient = new importantclient;
        $importantclient->name = $request->name;
        $importantclient->image = $target;  
        $importantclient->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminsummery');


    }

    public function editslider($id){ 
       
        $sliders = slider::find($id);
       return view('admin.editslide')->with('sliders',$sliders);
         
  
  
      }
    public function deleteimportant($id){
        $importantclient = importantclient::find($id);
        $importantclient->delete();
        return redirect('adminsummery');
      
       
    
}

public function updateslider(Request $request,$id){
      
    $sliders = slider::find($id);
 if(!empty($_FILES['mainimg']['name'])){

    
    $image = $_FILES['mainimg']['name'];
    $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
    
   
    $sliders->tittle = $request->tittle;
    $sliders->subtittle = $request->subtittle;
    $sliders->ctabutton = $request->ctabutton;
    $sliders->buttonlink = $request->buttonlink;
    $sliders->image = $target; 
    $sliders->update();

    move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

    return redirect('adminsummery');
 }else{

    
    $sliders->tittle = $request->tittle;
    $sliders->subtittle = $request->subtittle;
    $sliders->ctabutton = $request->ctabutton;
    $sliders->buttonlink = $request->buttonlink;
    $sliders->update();
    return redirect('adminsummery');

 }

}


}