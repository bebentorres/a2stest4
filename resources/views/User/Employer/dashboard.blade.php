@extends('layouts.app')

@section('content')
    <div class="container card p-3" id="companyProfile">
        <div class="row">
            {{-- <div class="col-md-4">
                <img src={{asset('build/images/logo.png')}} alt="" width="100%">
            </div> --}}
            <div class="col-md-9" id="companyName">
                <h2>
                    {{ Auth::user()->employerprofile->company_name }}
                </h2>
                <h4>{{ Auth::user()->employerprofile->company_industry }}</h4>
                <br>
                <p>{{ Auth::user()->employerprofile->company_description }}</p>
                <div>
                    <a class="btn btn-secondary" href="/employer/editprofile">Edit Profile</a>
                    <button class="btn btn-primary" href="">Post Jobs</button>
                </div>
            </div>
            <br><br>
        </div>
        
    </div>
    <br><br> 
    <div class="container card p-3">
        <h2>Highlights</h2>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="highlights-items">
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h4>Location</h4>
                        <p>{{ Auth::user()->employerprofile->company_address }}</p>
                    </div>
                </div>
                <div class="highlights-items">
                    <div>
                        <i class="fa-solid fa-boxes-packing"></i>
                    </div>
                    <div>
                        <h4>Benefits</h4>
                        <p>{{ Auth::user()->employerprofile->company_benefits }}</p>
                    </div>
                </div>
                <div class="highlights-items">
                    <div>
                        <i class="fa-solid fa-hourglass-start"></i>
                    </div>
                    <div>
                        <h4>Work Hours</h4>
                        <p>{{ Auth::user()->employerprofile->company_hours }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection