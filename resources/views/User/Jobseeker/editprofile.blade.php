@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('jobseeker.store')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label for="fname" >First Name:</label>
        <input type="text" class="form-control" name="fname">
        <br>
        <label for="lname" >Last Name:</label>
        <input type="text" class="form-control" name="lname">
        <br>
        <label for="user_address" >Address:</label>
        <input type="text" class="form-control" name="user_address">
        <br>
        <label for="user_bday" >Birth date:</label>
        <input type="date" class="form-control" name="user_bday">
        <br>
        <label for="user_num" >Phone Number:</label>
        <input type="number" class="form-control" name="user_num">
        <br>
        <label for="user_bio" >Bio:</label>
        <input type="text" class="form-control" name="user_bio">
        <br>
        <label for="user_skills" >Skills:</label>
        <input type="textarea" class="form-control" name="user_skills">
        <br>
        <button type="submit" class="btn btn-primary">
            {{ __('Submit') }}
        </button>
    
        <div>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
        </div>
    
    </form>
    
</div>
    
@endsection