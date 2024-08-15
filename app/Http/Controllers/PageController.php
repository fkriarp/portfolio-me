<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // routers
    public function home(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function portfolio(){
        return view("portfolio");
    }
    public function contact(){
        return view("contact");
    }
}
