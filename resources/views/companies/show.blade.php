@extends('layouts.app')

@section('meta_title')
    | {{$company->name}}
@endsection

@section('content')
    @include('partials.navsub')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>{{$company->name}}</h1>
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
