<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public static function getCarouselItems(){
        return Carousel::all();
    }
}
