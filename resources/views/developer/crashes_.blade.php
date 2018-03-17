@extends('layouts.master_layout')

@section('header')
    {{--Header--}}
    <nav class="navbar navbar-transparent navbar-absolute">
        @include('layouts.header')
    </nav>
@endsection

@section('content')

        {{--Content--}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Crashes</h4>
                                <p class="category">Crashes uploaded by the users</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Crash Name</th>
                                    <th>Description</th>
                                    <th>Uploaded By</th>
                                    <th>Salary</th>
                                    </thead>
                                    <tbody>

                                    @foreach($crashes as $crash)
                                    <tr>
                                        <td>{{$crash->crash_name}}</td>
                                        <td>{{$crash->description}}</td>
                                        <td>{{$crash->uploaded_by}}</td>
                                        <td class="text-primary">$36,738</td>
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

@section('footer')
    {{--Footer--}}
    <footer class="footer">
        @include('layouts.footer')
    </footer>
@endsection