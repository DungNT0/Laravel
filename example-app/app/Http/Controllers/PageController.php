<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
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