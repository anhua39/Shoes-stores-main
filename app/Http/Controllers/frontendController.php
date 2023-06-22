<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class frontendController extends Controller
{
    // Index
    public function index(){
        return view('frontend.index');
    }

    // Shop
    public function shop(){
        return view("frontend.pages.shop.shop");
    }

    // Brands
    public function addidas(){
        return view('frontend.pages.brands.addidas');
    }
    public function converse(){
        return view('frontend.pages.brands.converse');
    }
    public function nike(){
        return view('frontend.pages.brands.nike');
    }
    public function supreme(){
        return view('frontend.pages.brands.supreme');
    }
    public function van(){
        return view('frontend.pages.brands.van');
    }
    //  Pages
    public function aboutUs(){
        return view('frontend.pages.pages.aboutUs');
    }
    public function shoppingCart(){
        return view('frontend.pages.pages.shoppingCart');
    }
    public function checkOut(){
        return view('frontend.pages.pages.checkOut');
    }
    public function blogDetail(){
        return view('frontend.pages.pages.blogDetail');
    }

    // Blog
    public function blog(){
        return view('frontend.pages.blog.blog');
    }
    
     // Blog
     public function contact(){
        return view('frontend.pages.contact.contact');
    }

}
