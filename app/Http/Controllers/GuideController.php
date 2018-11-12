<?php

namespace App\Http\Controllers;

use App\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$guides = Guide::orderBy('updated_at', 'DESC')->get();
		return view('guides/index')->withGuides($guides);
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
		$this->validate($request, array(
			'title' 		=> 'required',
			'description' 	=> 'required|min:100',
			'intro' 		=> 'required',
		));

		$guide = new Guide;
		$guide->name = $request->name;
		$guide->intro = $request->intro;
		$guide->description = $request->description;
		$guide->slug = $request->slug;
		$delimiter = '-';
		$guide->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $guide->slug);
		$guide->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $guide->slug);
		$guide->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $guide->slug);
		$guide->slug = strtolower(trim($guide->slug, $delimiter));
		$guide->slug = $guide->slug.'-'.str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);
		$guide->save();

		return redirect()->route('jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(Guide $guide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guide $guide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
        //
    }
}
