<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class HomeController extends Controller
{
    public function index(){
        $projects = Project::get();
         return view('home' , compact('projects'));
    }
}
