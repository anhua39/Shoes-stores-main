<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function shop(){
        return view('frontend.pages.shop.shop');
    }

    public function blog(){
        return view('frontend.pages.blog');
    }

    public function aboutUs(){
        return view('frontend.pages.pages.aboutUs');
    }

    public function blogDetail(){
        return view('frontend.pages.pages.blogDetail');
    }

}
