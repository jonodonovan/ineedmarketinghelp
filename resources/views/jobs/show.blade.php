@extends('layouts.app')

@section('meta_info')
    <title>{{$job->title}} | INeedMarketingHelp! Marketing Job Board</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com/jobs/{{$job->slug}}" />
    <link rel="alternate" href="https://ineedmarketinghelp.com/jobs/{{$job->slug}}" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="{{$job->title}} | INeedMarketingHelp.com Job Board">
    <meta property="og:description" content="{{ucfirst($job->location)}} - {{$job->description}}">
    <meta property="og:url" content="https://ineedmarketinghelp.com/jobs/{{$job->slug}}">
    <meta property="og:type" content="website">
@endsection

@section('content')
    @include('partials.navsub')
    <div class="row">
        <div class="col-md-8">
            <i>Posted: {{$job->updated_at->format('M, d')}} | {{$job->type->name}} {{$job->category->name}}</i>
            <h1>{{$job->title}}</h1>
            <h4 style="color:#546E7A"></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            Company: <a style="color:#546E7A" href="{{url('/company/'.$job->company->slug)}}">{{$job->company->name}}</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            Job Location: <a style="color:#546E7A" href="{{url('/location/'.$job->location_slug)}}">{{ucfirst($job->location)}}</a> - {{$job->desk->name}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <a href="{{$job->company->url}}">{{$job->company->url}}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <h3>About Us:</h3>
            {{$job->company->description}}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <h3>Job Description:</h3>
            {{$job->description}}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-secondary" role="alert">
                <h3>Apply for this position</h3>
                {{$job->apply}}
            </div>
        </div>
    </div>
@endsection
