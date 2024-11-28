<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    //job page
    public function index(){
        return view('front.jobs');
    }
}
