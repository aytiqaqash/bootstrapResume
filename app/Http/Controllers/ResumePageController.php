<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumePageController extends Controller
{
    public function goster(){
        return view('pages.resume');
    }
}
