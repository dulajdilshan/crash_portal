@extends('layouts.admin.admin_layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4 class="title">Developers Manager</h4>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
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
                                <tbody>
                                @foreach($developers as $developer)
                                    <tr>
                                        <td class="text-primary">{{$developer->user_name}}</td>
                                        <td class="text-primary">{{$developer->name}}</td>
                                        <td class="text-primary">

                                                {{$developer->crash()->first()->id}}

                                            </td>
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


            <table id="myTable">
                <tr class="header">
                    <th style="width:60%;">Name</th>
                    <th style="width:40%;">Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Berglunds snabbkop</td>
                    <td>Sweden</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Koniglich Essen</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Italy</td>
                </tr>
                <tr>
                    <td>North/South</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Paris specialites</td>
                    <td>France</td>
                </tr>
            </table>
        </div>
    </div>
@endsection