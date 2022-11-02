@extends('layouts.app')

@section('content')
    <div class="container">
        Hello {{Auth::user()->name}}
    </div> 
@endsection