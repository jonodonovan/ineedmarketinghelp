@extends('layouts.app')

@section('content')
    @include('partials.navsub')
    <div class="row">
        <div class="col-md-8">
            <a style="color:#546E7A" href="{{url('/category/'.$job->category->slug)}}">{{$job->category->name}}</a>
            <h1>{{$job->title}}</h1>
            <h4 style="color:#546E7A">{{$job->updated_at->format('M, d')}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            Compamy: {{$job->company->name}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            Location: <a style="color:#546E7A" href="{{url('/location/'.$job->location_slug)}}">{{ucfirst($job->location)}}</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <a href="{{url('/company/'.$job->company->slug)}}">{{$job->company->url}}</a>
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
