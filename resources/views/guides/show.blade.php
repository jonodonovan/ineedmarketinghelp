@extends('layouts.app')

@section('meta_info')
    <title>{{$guide->title}} | INeedMarketingHelp! Marketing Job Board</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com/guides/{{$guide->slug}}" />
    <link rel="alternate" href="https://ineedmarketinghelp.com/guides/{{$guide->slug}}" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="{{$guide->title}} | INeedMarketingHelp.com Job Board">
    <meta property="og:description" content="{{$guide->description}}">
    <meta property="og:url" content="https://ineedmarketinghelp.com/guides/{{$guide->slug}}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center dark-bg">
		<div class="col-md-8 align-self-center white-bg">
			@include('partials.navsub')
		    <div class="row">
		        <div class="col-md-8">
		            <i>Posted: {{$guide->updated_at->format('M d')}} | {{$guide->type->name}} {{$guide->category->name}}</i>
		            <h1>{{$guide->title}}</h1>
		            <h4 style="color:#546E7A"></h4>
		        </div>
		    </div>
			@include('partials.subscribe')
		</div>
	</div>
@endsection
