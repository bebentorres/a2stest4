@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{route('employer.store')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label for="company_name" >Company Name:</label>
        <input type="text" class="form-control" name="company_name">
        <br>
        <label for="company_num" >Company Number:</label>
        <input type="text" class="form-control" name="company_num">
        <br>
        <label for="company_address" >Company Address:</label>
        <input type="text" class="form-control" name="company_address">
        <br>
        <label for="company_industry" >Industry:</label>
        <input type="text" class="form-control" name="company_industry">
        <br>
        <label for="company_benefits" >Benefits:</label>
        <input type="text" class="form-control" name="company_benefits">
        <br>
        <label for="company_hours" >Work hours:</label>
        <input type="text" class="form-control" name="company_hours">
        <br>
        <label for="company_description" >Company Description:</label>
        <input type="textarea" class="form-control" name="company_description">
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