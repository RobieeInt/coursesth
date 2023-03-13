<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        //get course
        $courses = Course::all();


        return view('landing', compact('courses'));
    }
}
