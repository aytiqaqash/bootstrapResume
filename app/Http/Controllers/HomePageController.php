<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;

class HomePageController extends Controller
{
    public function goster(){
        $summary = \App\Models\Summary::first();
        $educations = Education::get();
        $experiences = Experience::get();
        $services = Service::get();
        $carouselItems = CarouselController::getCarouselItems();
        return view('pages.home',compact('summary','educations', 'experiences','services','carouselItems'));
    }

    public function inDevelopment(){
        return back(302,["message"=>"the page is in development"]);
    }
}
