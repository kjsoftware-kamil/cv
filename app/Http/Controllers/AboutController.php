<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalInfo;
use App\Models\Section;
use App\Models\Skill;

class AboutController extends Controller
{
    public function __invoke()
    {
        $personalInfo = PersonalInfo::first();
        $skills = Skill::visible()->ordered()->get();
        $experiences = Experience::visible()->ordered()->get();
        $education = Education::visible()->ordered()->get();
        $sections = Section::visible()->ordered()->get();

        return view('about', compact('personalInfo', 'skills', 'experiences', 'education', 'sections'));
    }
}
