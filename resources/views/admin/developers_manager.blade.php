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
                                            <button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs" data-original-title="View Developer">
                                                <i class="material-icons">remove_red_eye</i>
                                                <div class="ripple-container"></div></button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Developer Profile">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div></button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove Developer">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div></button>
                                        </td>
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
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection

