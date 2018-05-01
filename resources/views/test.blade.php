@extends('layouts.app')

@section('content')
    <h3 style="text-align: center">Crash Info</h3>
    <h4 style="text-align: center">{{$crash->crash_title}}</h4>
    <h4 style="text-align: center">{{$crash->developer->name}}</h4>
    @foreach($dev->crash as $cr)
    <h4 style="text-align: center">{{$cr->crash_title}}</h4>
    @endforeach
@endsection