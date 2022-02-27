<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function goster(){
        $summary = \App\Models\Summary::first();
        return view('pages.home',compact('summary'));
    }
}
