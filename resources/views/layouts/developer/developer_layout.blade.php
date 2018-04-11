@extends('layouts.master_layout')

@section('sidebar')
    @include('layouts.developer.sidebar')
@endsection

@section('header')
    {{--Header--}}
    <nav class="navbar navbar-transparent navbar-absolute">
        @include('developer.includes.navbar')
    </nav>
@endsection

@section('footer')
    {{--Footer--}}
    <footer class="footer">
        @include('developer.includes.footer')
    </footer>
@endsection