@extends('layouts.master_layout')



@section('content')
    <table>
        <tr>
            <th>Crash Name</th>
            <th>Description</th>
            <th>Uploaded By</th>
        </tr>

    @foreach($crashes as $crash)
        <tr>
            <td>{{$crash->crash_name}}</td>
            <td>{{$crash->description}}</td>
            <td>{{$crash->uploaded_by}}</td>
        </tr>

    @endforeach

    </table>
@endsection