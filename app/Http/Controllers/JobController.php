<?php

namespace App\Http\Controllers;

use App\Job;
use App\Company;
use App\Category;
use App\Type;
use App\Desk;
use Illuminate\Http\Request;
use Session;

class JobController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['create', 'show']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $types = Type::get();
        $desks = Desk::get();
        return view('jobs.create')->withCategories($categories)->withTypes($types)->withdesks($desks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'job_title' => 'required',
            'job_category' => 'required',
            'job_type' => 'required',
            'job_desk' => 'required',
            'job_location' => 'required',
            'job_description' => 'required',
            'job_apply' => 'required',
            'company_name' => 'required',
            'company_url' => 'required',
            'company_email' => 'required',
            'company_description' => 'required',
        ));

        $company = new Company;
        $company->name = $request->company_name;
        $company->url = $request->company_url;
        $company->email = $request->company_email;
        $company->description = $request->company_description;
        $company->slug = $request->company_name;
        $delimiter = '-';
        $company->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $company->slug);
        $company->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $company->slug);
        $company->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $company->slug);
        $company->slug = strtolower(trim($company->slug, $delimiter));
        $company->slug = $company->slug.'-'.str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);
        $company->record = str_random(5).''.\Carbon\Carbon::now()->hour.''.str_random(5);
        $company->save();

        $job = new Job;
        $job->company_id = $company->id;
        $job->title = $request->job_title;
        $job->category_id = $request->job_category;
        $job->type_id = $request->job_type;
        $job->desk_id = $request->job_desk;
        $job->location = $request->job_location;
        $job->description = $request->job_description;
        $job->apply = $request->job_apply;
        $job->slug = $request->job_title;
        $delimiter = '-';
        $job->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $job->slug);
        $job->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $job->slug);
        $job->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $job->slug);
        $job->slug = strtolower(trim($job->slug, $delimiter));
        $job->slug = $job->slug.'-'.str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);
        $job->location_slug = $request->job_location;
        $job->location_slug = iconv('UTF-8', 'ASCII//TRANSLIT', $job->location_slug);
        $job->location_slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $job->location_slug);
        $job->location_slug = preg_replace("/[\/_|+ -]+/", $delimiter, $job->location_slug);
        $job->location_slug = strtolower(trim($job->location_slug, $delimiter));
        $job->record = str_random(5).''.\Carbon\Carbon::now()->hour.''.str_random(5);
        $job->active = FALSE;
        $job->save();

        // return redirect()->route('job.preview', [$job->record]);
        $job = Job::where('record', '=', $job->record)->firstOrFail();
        return redirect()->route('jobs.thankyou')->withJob($job);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $job = Job::where('slug', '=', $slug)->firstOrFail();
        return view('jobs.show')->withJob($job);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function preview($record)
    {
        $job = Job::where('record', '=', $record)->firstOrFail();
        return view('jobs.preview')->withJob($job);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function purchase($record)
    {
        $job = Job::where('record', '=', $record)->firstOrFail();
        return view('jobs.purchase')->withJob($job);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function purchased($record, Request $request)
    {
        $stripeToken = $request->stripeToken;
        $job = Job::where('record', '=', $record)->firstOrFail();
        $company = Company::where('id', '=', $job->company_id)->firstOrFail();

        $company->newSubscription('main', 'test_01')->create($stripeToken);

        $job->active = 1;
        $job->update();

        Session::flash('status', 'Job Purchased');
        return redirect()->route('job.thankyou', $job->record);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function thankyou($record)
    {
        $job = Job::where('record', '=', $record)->firstOrFail();
        return view('jobs.thankyou')->withJob($job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
