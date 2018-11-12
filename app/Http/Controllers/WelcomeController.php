<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function subscribe()
    {
        return view('subscribe');
    }
}
