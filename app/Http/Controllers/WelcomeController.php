<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $jobs = Job::with('category')->where('active', true)->orderBy('updated_at', 'DESC')->get();
        $groups = $jobs->groupBy('category_id');
        $categories = Category::get();
        // dd($groups);
        return view('welcome')->withGroups($groups)->withCategories($categories);
    }
}
