@extends('layouts.admin.admin_layout')
@section('content')
        {{--Content--}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Crashes</h4>
                                <p class="category">Crashes uploaded by the users</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary" style="color: slategrey">
                                    <th>Crash Name</th>
                                    {{--  <th>Description</th>  --}}
                                    <th>Uploaded By</th>
                                    <th>Assigned to</th>
                                    </thead>
                                    <tbody>

                                    @foreach($crashes as $crash)
                                    <tr>
                                        <td>{{$crash->crash_title}}</td>
                                        {{--  <td>{{$crash->description}}</td>  --}}
                                        <td>{{$crash->report_created_at}}</td>
                                    <td class="text-primary">{{$crash->id}}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {{--  Another col  --}}
                </div>
            </div> 
        </div>  
@endsection