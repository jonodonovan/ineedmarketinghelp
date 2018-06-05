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
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <div class="navbar-brand d-flex align-items-center">
                <a href="{{url('/')}}" style="text-decoration: none;">
                    <span class="cursive">
                        I Need Marketing Help! <br>
                        <span class="noncursive">Marketing Job Board</span>
                    </span>
                </a>
            </div>

            <a href="{{url('job/create')}}" class="btn btn-success btn-sm">Post a Free Job Ad</a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
        </div>
    </div>
</header>
