<?php

namespace App\Http\Controllers;

class PresentationController extends Controller
{
    public function __invoke()
    {
        return view('presentation');
    }
}
