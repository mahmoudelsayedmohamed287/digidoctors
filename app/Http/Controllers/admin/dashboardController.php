<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
session_start();
use App\clients;
use App\posts;
use App\services;
use App\works;

class dashboardController extends Controller
{
    public function index(){
        $clients = clients::count();
        $posts = posts::count();
        $services = services::count();
        $works = works::count();
       
        return view('admin.index', compact('clients', 'posts', 'services','works'));
        
    }
}
