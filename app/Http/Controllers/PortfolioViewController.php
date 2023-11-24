<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioViewController extends Controller
{
    public function home(){
       return view("pages.home"); 
    }

    public function aboutMe(){
        return view("pages.aboutMe"); 
     }

     public function projects(){
        return view("pages.projects"); 
     }

     public function contact(){
        return view("pages.contact"); 
     }
}
