<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function goster(){
        $summary = \App\Models\Summary::first();
        $educations = Education::get();
        return view('pages.home',compact('summary','educations'));
    }
}
