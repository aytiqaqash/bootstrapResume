<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use Jorenvh\Share\Share;

class HomePageController extends Controller
{
    public function goster(){
        $summary = \App\Models\Summary::first();
        $educations = Education::get();
        $experiences = Experience::get()->sortByDesc("order");
        $services = Service::get();
        $carouselItems = CarouselController::getCarouselItems();
        $shareComponent = new Share;
        $shareComponent->page(env('APP_URL'), env("APP_NAME"))
            ->facebook()
            ->twitter()
            ->linkedin('Extra linkedin summary can be passed here')
            ->whatsapp()
            ->getRawLinks();
        return view('pages.home',compact('summary','educations', 'experiences','services','carouselItems','shareComponent'));
    }

    public function inDevelopment(){
        return back(302,["message"=>"the page is in development"]);
    }
}
