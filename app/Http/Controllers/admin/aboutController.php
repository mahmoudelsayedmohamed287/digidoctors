<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\about;
use App\vision;
use App\whyus;
use App\importantclient;
use App\team;
use DB;

class aboutController extends Controller
{
    public function index(){
        $abouts = about::all();
        $vessions = vision::all();
        $whyus = whyus::all();
        $teams = team::all();
        $importantclient = importantclient::all();

        return view('admin.allabout')->with('data',['abouts'=>$abouts,'vessions'=>$vessions,'whyus'=>$whyus,'importantclient'=>$importantclient,'teams'=>$teams]);

    }

   
    public function createimportant(){
        
        return view('admin.addimportant');
    }
    public function createteam(){
        
        return view('admin.addteam');
    }

    public function add(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $abouts = new about;
        $abouts->text = $request->text;
        $abouts->image = $target;  
        $abouts->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminabouts');


    }

    public function addteam(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $teams = new team;
        $teams->name = $request->name;
        $teams->description = $request->description;
        $teams->facebook = $request->facebook;
        $teams->twitter = $request->twitter;
        $teams->linkedin = $request->linkedin;
        $teams->whatsapp = $request->whatsapp;
        $teams->instgram = $request->instgram;
        $teams->image = $target;  
        $teams->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminabouts');


    }

    public function addvession(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $vessions = new vision;
        $vessions->text = $request->text;
        $vessions->image = $target;  
        $vessions->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminabouts');


    }
    public function addwhyus(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $whyus = new whyus;
        $whyus->text = $request->text;
        $whyus->image = $target;  
        $whyus->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminabouts');


    }

    public function addimportant(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
        $importantclient = new importantclient;
        $importantclient->name = $request->name;
        $importantclient->image = $target;  
        $importantclient->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('adminabouts');


    }


    public function delete($id){
        $abouts = about::find($id);
        $abouts->delete();
        return redirect('adminabouts');

    }

    public function deletevession($id){
        $vessions = vision::find($id);
        $vessions->delete();
        return redirect('adminabouts');

    }

    public function deletewhyus($id){
        $whyus = whyus::find($id);
        $whyus->delete();
        return redirect('adminabouts');

    }

    public function deleteimportant($id){
        $importantclient = importantclient::find($id);
        $importantclient->delete();
        return redirect('adminabouts');


    }

    
    public function deleteteam($id){
        $teams = team::find($id);
        $teams->delete();
        return redirect('adminabouts');

    }
}
