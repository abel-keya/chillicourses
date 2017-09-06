<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrollController extends Controller
{
    public function enroll()
    {
    	return view('course.enroll.enroll');
    }

    public function enrolled()
    {
    	return view('course.enroll.enrolled');
    }
}
