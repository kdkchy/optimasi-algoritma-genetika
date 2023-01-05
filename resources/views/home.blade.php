@extends('layouts.master')
@section('title', 'Home')

@section('content')

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        @include('admin.dashboard')
    @endif

@endsection
