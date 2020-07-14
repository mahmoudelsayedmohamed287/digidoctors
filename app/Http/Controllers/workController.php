<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\services;
use App\works;
use App\team;
use App\clients;
use App\contactus;
use DB;
class workController extends Controller
{
    public function index(){
        $abouts = about::all();
        $services = services::all();
        $works = works::all();
        $clients = clients::all();
        $contactus = contactus::all();
       
        return view('work')->with('data',['abouts'=>$abouts,'contactus'=>$contactus,'services'=>$services,'works'=>$works,'clients'=>$clients]);
        

    }
}
