@extends('layouts.app')

@section('meta_info')
    <title>INeedMarketingHelp! Marketing Job Board</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com" />
    <link rel="alternate" href="https://ineedmarketinghelp.com" hreflang="en-us" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

                @foreach($groups as $category=>$jobs)
                    <br>
                    @foreach($categories as $singlecategory)
                        @if($category == $singlecategory->id)
                            <a style="color:#546E7A" href="{{url('/category/'.$singlecategory->slug)}}">{{$singlecategory->name}}</a>
                        @endif
                    @endforeach

                    <ul class="list-group">
                    @foreach ($jobs as $job)
                        <li class="list-group-item">
                            <a style="color:#546E7A" href="{{url('/type/'.$job->type->slug)}}">{{ucfirst($job->type->name)}}</a> |
                            <a style="color:#546E7A" href="{{url('/desk/'.$job->desk->slug)}}">{{ucfirst($job->desk->name)}}</a> |
                            <a style="color:#546E7A" href="{{url('/location/'.$job->location_slug)}}">{{ucfirst($job->location)}}</a>
                            <h2>
                                <a style="color:#546E7A" href="{{url('/company/'.$job->company->slug)}}">{{$job->company->name}}</a>
                                <a href="{{url('/job/'.$job->slug)}}">{{$job->title}}</a>
                                <span class="float-right" style="color:#546E7A">{{$job->updated_at->format('M, d')}}</span>
                            </h2>
                        </li>
                    @endforeach
                    </ul>
                @endforeach

        </div>
    </div>
@endsection
