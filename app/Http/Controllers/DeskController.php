<?php

namespace App\Http\Controllers;

use App\Desk;
use App\Job;
use Illuminate\Http\Request;

class DeskController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $desk = Desk::where('slug', '=', $slug)->firstOrFail();
        $jobs = Job::where('desk_id', '=', $desk->id)->orderBy('updated_at', 'DESC')->get();
        return view('desks.show')->withDesk($desk)->withJobs($jobs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function edit(Desk $desk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desk $desk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        //
    }
}
