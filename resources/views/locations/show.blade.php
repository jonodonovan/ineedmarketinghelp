@extends('layouts.app')

@section('meta_info')
    <title>{{$location->location}} Jobs | INeedMarketingHelp! Marketing Job Board</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com/location/{{$location->location_slug}}" />
    <link rel="alternate" href="https://ineedmarketinghelp.com/location/{{$location->location_slug}}" hreflang="en-us" />
@endsection

@section('content')
    @include('partials.navsub')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>{{$location->location}}</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="list-group">
                @foreach ($jobs as $job)
                    @include('partials.jobs')
                @endforeach
            </ul>
        </div>
    </div>

@endsection
