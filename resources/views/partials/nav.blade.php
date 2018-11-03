<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Post your marketing positions today.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                    {{-- <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="navbar box-shadow">
        <div class="container d-flex justify-content-between">
            <div class="navbar-brand d-flex align-items-center">
                <a href="{{url('/')}}" style="text-decoration: none;">
                    <img src="/logo.jpg" alt="Site logo">
                </a>
            </div>

            <a href="{{url('guides')}}" class="nav-link">Guides</a>
            <a href="{{url('news')}}" class="nav-link">News</a>
            <a href="{{url('case-studies')}}" class="nav-link">Case Studies</a>
            <a href="{{url('jobs')}}" class="nav-link">Jobs</a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
        </div>
    </div>
</header>
