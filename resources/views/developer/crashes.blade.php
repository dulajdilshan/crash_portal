@extends('layouts.master_layout')

@section('navbar')
    <div class="navbar">
        Hi Nav bar
    </div>
@endsection


@section('content')
    @foreach($crashes as $crash)
        <p>{{$crash->id}}</p>
    @endforeach
@endsection