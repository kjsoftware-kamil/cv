<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalInfo;
use App\Models\Project;
use App\Models\Section;
use App\Models\Skill;

class HomeController extends Controller
{
    public function __invoke()
    {
        $sections = Section::visible()->ordered()->get();
        $personalInfo = PersonalInfo::first();
        $projects = Project::visible()->ordered()->get();
        $skills = Skill::visible()->ordered()->get();
        $experiences = Experience::visible()->ordered()->get();
        $education = Education::visible()->ordered()->get();

        return view('welcome', compact('sections', 'personalInfo', 'projects', 'skills', 'experiences', 'education'));
    }
}
