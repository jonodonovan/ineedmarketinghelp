<nav class="navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand" href="{{url('/')}}">
		<img src="/logo.png" alt="Site logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item @if (Request::is('guides')) active @endif">
				<a class="nav-link" href="{{url('guides')}}">Guides</a>
			</li>
			<li class="nav-item @if (Request::is('news')) active @endif">
				<a class="nav-link" href="{{url('news')}}">News</a>
			</li>
			<li class="nav-item @if (Request::is('case-studies')) active @endif">
				<a class="nav-link" href="{{url('case-studies')}}">Case Studies</a>
			</li>
			<li class="nav-item @if (Request::is('jobs')) active @endif">
				<a class="nav-link" href="{{url('jobs')}}">Jobs</a>
			</li>
			{{-- <li class="nav-item @if (Request::is('shop')) active @endif">
				<a class="nav-link" href="{{url('shop')}}">Shop</a>
			</li> --}}
		</ul>
	</div>
</nav>
