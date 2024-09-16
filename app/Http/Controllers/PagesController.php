<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;

class PagesController extends Controller
{
    //
    public function resume()
    {
        
        $experiences = Experience::all();
        $educations = Education::all();
        $skills = Skill::all();
        $languages = Language::all();
        
        return view("pages.resume", compact('experiences', 'educations', 'skills', 'languages'));
    }

    public function projects()
    {
        $projects = Project::all();

        return view("pages.projects", ['list' => $projects]);
    }

    public function contact()
    {
        return view("pages.contact");
    }

    public function terms()
    {
        return view("pages.terms");
    }

    public function privacy()
    {
        return view("pages.privacy");
    }
}
