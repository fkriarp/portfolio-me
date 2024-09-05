<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPortfolio;

class PageController extends Controller
{
    // routers
    public function home(){
        return view("home", ["title" => "Home"]);
    }
    public function about(){
        return view("about", ["title" => "About"]);
    }
    public function portfolio(){
        return view("portfolio", ["title" => "Portfolio", "posts" => DetailPortfolio::all()]);
    }
    public function contact(){
        return view("contact", ["title" => "Contact"]);
    }
}
