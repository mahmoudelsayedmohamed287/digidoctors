<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\vision;
use App\mission;
use App\team;
use App\clients;
use App\contactus;
use App\digicore;
use DB;

class aboutController extends Controller
{
    public function index(){
        $abouts = about::all();
        $visions = vision::all();
        $missions = mission::all();
        $teams = team::all();
        $clients = clients::all();
        $contactus = contactus::all();
        $cores = digicore::all();
        return view('about')->with('data',['abouts'=>$abouts,'cores'=>$cores,'contactus'=>$contactus,'visions'=>$visions,'missions'=>$missions,'teams'=>$teams,'clients'=>$clients]);
        

    }
    

    } 

