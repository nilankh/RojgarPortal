<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //job page
    public function index(){

        $categories = Category::where('status', 1)->get();
        $jobTypes = JobType::where('status', 1)->get();
        // to use relation we need to use with
        $jobs = Job::where('status', 1)->with('jobType')->orderBy('created_at','DESC')->paginate(9);
        
        return view('front.jobs', [
            'categories'=>$categories,
            'jobTypes'=>$jobTypes,
            'jobs'=>$jobs,
        ]);
    }
}
