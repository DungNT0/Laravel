<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class PageController extends Controller
{
    public function getIndex(){
        // $slide = Slide::all();
        // return view('page.index', compact('slide'));
        return view('page.index');
    }

    public function getProTy(){
        return view('page.product_type');
    }

    public function getProDe(){
        return view('page.product_details');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getAbout(){
        return view('page.about');
    }
}