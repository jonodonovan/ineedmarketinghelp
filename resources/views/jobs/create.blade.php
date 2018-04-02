@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>STEP 1: CREATE YOUR JOB AD</h2>
        </div>
        <div class="col-md-4 ml-auto">
            <button type="button" class="btn btn-outline-success" style="margin-right:5px;"disabled>1. Create</button>
            <button type="button" class="btn btn-outline-secondary" style="margin-right:5px;"disabled>2. Preview</button>
            <button type="button" class="btn btn-outline-secondary" style="margin-right:5px;"disabled>3. Purchase</button>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center" style="margin-top:20px;margin-bottom:40px;">
        <div class="col-md-8">
            <div><span class="badge badge-success">New!</span> Listings are subscription-based and are active until you've filled the position. Every 30 days you will be charged $149 and your listing will be moved back to the top of its category.</div>
            <br>
            <div>Note that each listing can only be used to fill a single position.</div>
        </div>
    </div>
    <form method="POST" action="{{route('job.store')}}">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>First, tell us about the position</h3>
            <p>All fields are required.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }}" name="job_title" id="job_title" value="{{ old('job_title') }}">
                @if ($errors->has('job_title'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('job_title') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="job_category">Category</label>
                <select class="form-control{{ $errors->has('job_category') ? ' is-invalid' : '' }}" id="job_category" name="job_category">
                    <option value="">Select</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('job_category'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('job_category') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="form-group">
                <label for="job_type">Job Type</label>
                <select class="form-control{{ $errors->has('job_type') ? ' is-invalid' : '' }}" id="job_type" name="job_type">
                        <option value="">Select</option>
                        @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                </select>
                @if ($errors->has('job_type'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('job_type') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="job_desk">Remote or Onsite?</label>
                <select class="form-control{{ $errors->has('job_desk') ? ' is-invalid' : '' }}" id="job_desk" name="job_desk">
                        <option value="">Select</option>
                        @foreach ($desks as $desk)
                            <option value="{{$desk->id}}">{{$desk->name}}</option>
                        @endforeach
                </select>
                @if ($errors->has('job_desk'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('job_desk') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="job_location">Job Location</label>
                <input type="text" class="form-control{{ $errors->has('job_location') ? ' is-invalid' : '' }}" name="job_location" id="job_location" value="{{old('job_location')}}">
                @if ($errors->has('job_location'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('job_location') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="job_description">Job Description</label>
                <textarea name="job_description" name="job_description" id="job_description" rows="5" class="form-control{{$errors->has('job_description') ? ' is-invalid' : ''}}">{{old('job_description')}}</textarea>
                @if ($errors->has('job_description'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('job_description')}}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="job_apply">How do people apply for this job?</label>
                <textarea name="job_apply" name="job_apply" id="job_apply" rows="3" class="form-control{{$errors->has('job_apply') ? ' is-invalid' : ''}}">{{old('job_apply')}}</textarea>
                @if ($errors->has('job_apply'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('job_apply')}}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <hr class="col-md-8" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Tell us about your company</h3>
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" id="company_name" value="{{old('company_name')}}">
                    @if ($errors->has('company_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company_url">Company URL</label>
                    <input type="text" class="form-control{{ $errors->has('company_url') ? ' is-invalid' : '' }}" name="company_url" id="company_url" value="{{old('company_url')}}">
                    @if ($errors->has('company_url'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company_url') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company_email">Company Email</label>
                    <input type="text" class="form-control{{ $errors->has('company_email') ? ' is-invalid' : '' }}" name="company_email" id="company_email" value="{{old('company_email')}}">
                    @if ($errors->has('company_email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company_email') }}</strong>
                        </span>
                    @endif
                    <p>This is where we’ll send your receipt and confirmation email.</p>
                </div>
                <div class="form-group">
                    <label for="company_description">Company Description</label>
                    <textarea name="company_description" name="company_description" id="company_description" rows="5" class="form-control{{ $errors->has('company_description') ? ' is-invalid' : '' }}">{{old('company_description')}}</textarea>
                    @if ($errors->has('company_description'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('company_description')}}</strong>
                        </span>
                    @endif
                </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button type="submit" class="btn btn-success btn-lg">Continue to Step 2 to preview your ad</button>
        </div>
    </div>
    </form>
    <div style="margin-bottom:50px;"></div>
@endsection
