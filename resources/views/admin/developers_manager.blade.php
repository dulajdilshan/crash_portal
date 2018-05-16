@extends('layouts.admin.admin_layout')
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
                                <div class="col-md-5">
                                    <h4 class="title">Developers Manager</h4>
                                </div>
                                <div class="col-md-7">
                                    Search
                                    <input type="text" style="color: #0f0f0f" id="myInput" placeholder="Search for names or usernames..">
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-primary" style="color: slategrey">
                                <th>Username</th>
                                <th>Name</th>
                                {{----}}
                                <th>No of Crashes Assigned</th>
                                <th>Controls</th>
                                </thead>
                                <tbody id="myTable">
                                @foreach($developers as $developer)
                                    <tr>
                                        <td class="text-primary">{{$developer->user_name}}</td>
                                        <td class="text-primary">{{$developer->name}}</td>
                                        <td class="text-primary">{{$developer->crash()->count()}}</td>
                                        <td class="text-primary">
                                            <button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs" data-original-title="View Developer" onclick="window.location.href='view-developer/{{$developer->id}}'">
                                                <i class="material-icons">remove_red_eye</i>
                                                <div class="ripple-container"></div></button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Developer Profile" onclick="window.location.href='view-developer/{{$developer->id}}'">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div></button>
                                            <button id="delete{{$developer->id}}" type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove Developer" onclick="deleteDeveloper(this)">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div></button>
                                        </td>
                                        {{--Delete Crash--}}
                                        <div id="deleteDeveloper{{$developer->id}}" class="modal2">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <form method="post" action="{{url('admin/developer/delete')}}"> {{ csrf_field() }}
                                                        <div class="row" style="font-size: large">
                                                            Are you sure want to delete Developer : <b>{{$developer->id}}</b>?
                                                            <input name="developer_id" value="{{$developer->id}}" hidden>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <button type="reset" id="no{{$developer->id}}" class="btn btn-primary" onclick="notDeleteDeveloper(this)">No</button>
                                                            <button type="submit" class="btn btn-rose" >Yes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scrol l if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modal2 {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scrol l if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 20%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {0
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}
        span{
            color: #78341a;
        }
    </style>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        function deleteDeveloper(e) {
            var id = e.id;
            var modalx = document.getElementById("deleteDeveloper"+id.substr(6,120));
            modalx.style.display = "block";
        }

        function notDeleteDeveloper(e) {
            var id = e.id;
            var modalx = document.getElementById("deleteDeveloper"+id.substr(2,120));
            modalx.style.display = "none";
        }
    </script>
@endsection

