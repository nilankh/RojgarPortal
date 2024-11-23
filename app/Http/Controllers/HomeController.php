<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //This method is for home page
    public function index(){
        return view('front.home');
    }
}
