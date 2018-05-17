@extends('layouts.developer.developer_layout')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 class="title">Crashes</h4>
                                    <p class="category">Crashes uploaded by the users</p>
                                </div>
                                <div class="col-md-5">
                                    <button class="btn btn-round" onclick="filterTable()">Unassigned Crashes</button>
                                    <button class="btn btn-round" onclick="showAll()">All crashes</button>
                                </div>
                                <div class="col-md-2">
                                    Search
                                    <input type="text" style="color: #0f0f0f" id="myInput" placeholder="Search..">
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-primary" style="color: slategrey">
                                <th>ID</th>
                                <th>Title</th>
                                {{--  <th>Description</th>  --}}
                                <th>Report created at</th>
                                <th>Progress</th>
                                <th>Assigned Developer</th>
                                <th></th>
                                <th>Controls</th>
                                </thead>
                                <tbody id="myTable">
                                @foreach($crashes as $crash)
                                    <tr>
                                        <td class="text-primary">{{$crash->id}}</td>
                                        <td><a id="{{$crash->id}}">{{$crash->crash_title}}</a></td>
                                        <td>{{$crash->report_created_at}}</td>
                                        <td>
                                            <div class="progress progress-line-primary">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: {{$crash->progress}}%;">
                                                    <p style="color: #1a1a1a">{{$crash->progress}}%</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$crash->name}}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm btn-success" id="view{{$crash->id}}" onclick="viewCrash(this)">
                                                <i class="material-icons">remove_red_eye</i> View
                                            </button>
                                            {{--<button id="myBtn">Show</button>--}}
                                        </td>
                                        <td>

                                            @if($crash->developer_id==$id)
                                            <button class="btn btn-sm" id="edit{{$crash->id}}" onclick="window.location.href='crash/{{$crash->id}}'">
                                                <i class="material-icons">build</i>Edit</button>
                                            <button class="btn btn-primary btn-sm btn-rose" id="delete{{$crash->id}}" onclick="viewDeleteCrash(this)" disabled>
                                                <i class="material-icons">delete</i>Delete</button>
                                            <button class="btn btn-primary btn-sm btn-warning" id="assign{{$crash->id}}" onclick="window.location.href='view-developer/{{$crash->developer_id}}'" disabled>
                                                <i class="material-icons">rowing</i>Assign Myself</button>
                                            @elseif($crash->developer_id==0)
                                                <button class="btn btn-sm" id="edit{{$crash->id}}" onclick="window.location.href='crash/{{$crash->id}}'" disabled="">
                                                    <i class="material-icons">build</i>Edit</button>
                                                <button class="btn btn-primary btn-sm btn-rose" id="delete{{$crash->id}}" onclick="viewDeleteCrash(this)" disabled>
                                                    <i class="material-icons">delete</i>Delete</button>
                                                <button class="btn btn-primary btn-sm btn-warning" id="assign{{$crash->id}}" onclick="event.preventDefault();
                                                     document.getElementById('assign-myself{{$crash->id}}').submit();" >
                                                    <i class="material-icons">rowing</i>Assign Myself</button>
                                            @else
                                                <button class="btn btn-sm" id="edit{{$crash->id}}" onclick="window.location.href='crash/{{$crash->id}}'" disabled="">
                                                    <i class="material-icons">build</i>Edit</button>
                                                <button class="btn btn-primary btn-sm btn-rose" id="delete{{$crash->id}}" onclick="viewDeleteCrash(this)" disabled>
                                                    <i class="material-icons">delete</i>Delete</button>
                                                <button class="btn btn-primary btn-sm btn-warning" id="assign{{$crash->id}}" onclick="window.location.href='view-developer/{{$crash->developer_id}}'" disabled>
                                                    <i class="material-icons">rowing</i>Assign Myself</button>
                                            @endif
                                            <form id="assign-myself{{$crash->id}}" action="{{ url('developer/assign-myself') }}" method="POST" style="display: none;">
                                                <input name="crash_id" value="{{$crash->id}}">
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                        @include('crash.view_crash')
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{--POP up box for viewing crashes--}}
                        {{--@include('crash.view_crash')--}}
                    </div>
                </div>
                {{--  Another col  --}}
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        function filterTable() {
            var filter = 0;
            var rows = document.querySelector("#myTable").rows;

            for (var i = 0; i < rows.length; i++) {
                var progressCol = parseInt(rows[i].cells[3].textContent);
                if (progressCol == 0) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        function showAll() {
            var rows = document.querySelector("#myTable").rows;
            for(var i = 0;i < rows.length;i++){
                rows[i].style.display = "";
            }
        }
    </script>
@endsection