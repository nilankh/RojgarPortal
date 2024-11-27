<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //This method is for home page
    public function index(){
        $categories = Category::where('status', 1)->orderBy('name', 'ASC')->take(8)->get();

        $featuredJobs = Job::where('status',1)->orderBy('created_at', 'DESC')->with('jobType')->where('isFeatured', 1)->take(6)->get();
        
        // dd($featuredJobs);
        
        $latestJobs = Job::where('status',1)->with('jobType')->orderBy('created_at', 'DESC')->take(6)->get();

        return view('front.home', [
            'categories' => $categories,
            'featuredJobs' => $featuredJobs,
            'latestJobs' => $latestJobs
        ]);
    }
}
