@extends('layouts.master_layout')

@section('header')
    {{--Header--}}
    <nav class="navbar navbar-transparent navbar-absolute">
        @include('developer.includes.navbar')
    </nav>
@endsection

@section('content')
    <h3>My Crashes</h3>
@endsection

@section('footer')
    {{--Footer--}}
    <footer class="footer">
        @include('developer.includes.footer')
    </footer>
@endsection