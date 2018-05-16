@extends('layouts.admin.admin_layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="btn btn-primary" onclick="window.location.href='{{url('admin/crashes#')}}{{$crash->id}}'">< Go Back</div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title"><b>Crash: </b>{{$crash->crash_title}}</h4>
                            {{--<p class="category">Complete your profile</p>--}}
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{url('admin/crash/update')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">CRASH ID</label>
                                            <input name="crash_id" type="text" class="form-control" value="{{$crash->id}}" readonly  >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">REPORTED BY</label>
                                            <input type="text" class="form-control" value="{{$crash->crash_info()->first()->reporter_id}}" disabled readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label" >CATEGORY</label>
                                            <input name="category" type="text" class="form-control" value="{{$crash->crash_info()->first()->category}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">REPORT CREATED AT</label>
                                            <input type="text" class="form-control" value="{{$crash->report_created_at}}" disabled readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>REPORT DETAILS</label>
                                        <div class="form-group label-floating">
                                            {{--<input type="text" class="form-control" value="Suspended">--}}
                                            <textarea name="report_details" class="form-control" rows="4">
                                                {{$crash->crash_info()->first()->crash_details}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">PROGRESS % (Last Progress: {{$crash->progress}}%)</label>
                                            <input type="text" name="progress" class="form-control" value="{{$crash->progress}}" >
                                            <div class="progress progress-line-primary" disabled readonly>
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: {{$crash->progress}}%;">
                                                </div><p style="color: #1a1a1a">Last Progress: {{$crash->progress}}%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">SOLVED ?</label>
                                            @if($crash->solved==1)
                                                <input type="text" class="form-control" value="YES" disabled readonly>
                                            @else
                                                <input type="text" class="form-control" value="NO" disabled readonly>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>DEVELOPMENT STATUS</label>
                                            <div class="form-group label-floating">
                                                <label class="control-label"></label>
                                                <textarea name="development_status" class="form-control" rows="5">
                                                    {{$crash->development_status}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success pull-right">PUBLISH CHANGES</button>
                                <button type="reset" class="btn btn-warning pull-right" >RESET</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--Developers Details--}}
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="{{asset('img/faces/marc.jpg')}}" />
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="category text-gray">Developer</h6>
                            <h4 class="card-title">{{$crash->developer()->first()->name}}</h4>
                            <p class="card-content">
                                <i class="fa fa-envelope"></i> {{$crash->developer()->first()->email}}<br>
                                <i class="fa fa-github"></i> {{$crash->developer()->first()->github_url}}<br>
                                <i class="fa fa-linkedin"></i> {{$crash->developer()->first()->linkedin_url}}<br>
                                <i class="fa fa-facebook"></i> {{$crash->developer()->first()->fb_url}}<br>
                                <b>About </b><br> {{$crash->developer()->first()->about}}
                            </p>
                            {{--<a href="#pablo" class="btn btn-primary btn-round">Follow</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection