<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $project = Project::first();
        $experience = Experience::first();
        return view("welcome", compact('project', 'experience'));
    }
}
