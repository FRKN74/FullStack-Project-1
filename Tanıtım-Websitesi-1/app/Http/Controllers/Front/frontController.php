<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Person;
use App\Models\Product;
use App\Models\Slider;

class frontController extends Controller
{
    public function index()
    {
        $person = Person::all();
        $products = Product::all();
        $sliders = Slider::all();
        return view('homepage',compact('person','products','sliders'));
    }


    public function allview()
    {
        return view('layouts.back.contents.allviews');
    }
}
