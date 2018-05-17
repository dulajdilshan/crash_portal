@extends('layouts.admin.admin_layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="{{asset('img/faces/marc.jpg')}}" />
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="category text-gray">Developer</h6>
                                <h4 class="card-title">{{$admin->user_name}}</h4>
                                <p class="card-content">
                                <span class="row">
                                   <i class="fa fa-envelope"></i> {{$admin->email}}<br>
                                </span>
                                    <span class="row">
                                    <i class="fa fa-github"></i> {{$admin->github_url}}<br>
                                </span>
                                    <span class="row">
                                    <i class="fa fa-linkedin"></i> {{$admin->linkedin_url}}<br>
                                </span>
                                    <span class="row">
                                    <i class="fa fa-facebook"></i> {{$admin->fb_url}}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">My Profile</h4>
                            <p class="category">Edit and Update</p>
                        </div>
                        <div class="card-content">
                            <form method="post" action="{{url('admin/update-profile')}}">{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username (disabled)</label>
                                            <input type="text" class="form-control" value="{{$admin->user_name}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Admin ID</label>
                                            <input name="admin_id" type="text" class="form-control" value="{{$admin->id}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input name="email" type="email" class="form-control" value="{{$admin->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$admin->user->name}}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Github URL</label>
                                            <input type="text" name="github_url" class="form-control" value="{{$admin->github_url}}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Facebook URL</label>
                                            <input type="text" name="fb_url" class="form-control" value="{{$admin->fb_url}}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">LinkedIn URL</label>
                                            <input type="text" name="linkedin_url" class="form-control" value="{{$admin->linkedin_url}}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Other Link</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" value="Colombo">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <input type="text" class="form-control" value="Sri Lanka">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Postal Code</label>
                                            <input type="text" class="form-control" value="10500">
                                        </div>
                                        <div class="form-group label-floating">
                                            <a href="/change-password">Change Password</a>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                                <button type="reset" class="btn btn-warning pull-right" >RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection