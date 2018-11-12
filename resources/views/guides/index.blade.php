@extends('layouts.app')

@section('meta_info')
    <title>Guides</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com" />
    <link rel="alternate" href="https://ineedmarketinghelp.com" hreflang="en-us" />
@endsection

@section('og')

@endsection

@section('content')
	<div class="row justify-content-center dark-bg">
		<div class="col-md-8 align-self-center">
			<div class="card-columns">
			@foreach ($guides as $guide)
				<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{ucfirst($guide->title)}}</h5>
						<p class="card-text">{{$guide->body}}</p>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@endsection
