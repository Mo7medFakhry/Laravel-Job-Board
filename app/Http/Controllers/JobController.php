<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $Jobs = Job::all();

        return view ('Job.index' , ['Jobs' => $Jobs]);
    }
}

