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
                            <h4 class="card-title">{{$developer->name}}</h4>
                            <p class="card-content">
                                <span class="row">
                                   <i class="fa fa-envelope"></i> {{$developer->email}}<br>
                                </span>
                                <span class="row">
                                    <i class="fa fa-github"></i> {{$developer->github_url}}<br>
                                </span>
                                <span class="row">
                                    <i class="fa fa-linkedin"></i> {{$developer->linkedin_url}}<br>
                                </span>
                                <span class="row">
                                    <i class="fa fa-facebook"></i> {{$developer->fb_url}}<br>
                                </span>
                                <span class="row">
                                    <b>About </b><br> {{$developer->about}}
                                </span>
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Contributing Crashes</h4>
                            <p class="category">Crashes upto now</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <tr><th>ID</th>
                                    <th>Crash Name</th>
                                    <th>Progress</th>
                                </tr></thead>
                                <tbody>
                                    @foreach($developer->crash as $crash_)
                                    <tr>
                                        <td>{{$crash_->id}}</td>
                                        <td>{{$crash_->crash_title}}</td>
                                        <td>{{$crash_->progress}}%</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Developer Profile</h4>
                            <p class="category">Edit and Update</p>
                        </div>
                        <div class="card-content">
                            <form method="post" action="{{url('admin/update-developer')}}">{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username (disabled)</label>
                                            <input type="text" class="form-control" value="{{$developer->user_name}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Developer ID</label>
                                            <input name="developer_id" type="text" class="form-control" value="{{$developer->id}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input name="email" type="email" class="form-control" value="{{$developer->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$developer->name}}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Github URL</label>
                                            <input type="text" name="github_url" class="form-control" value="{{$developer->github_url}}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Facebook URL</label>
                                            <input type="text" name="fb_url" class="form-control" value="{{$developer->fb_url}}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">LinkedIn URL</label>
                                            <input type="text" name="linkedin_url" class="form-control" value="{{$developer->linkedin_url}}">
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
                                        <div class="form-group">
                                            <label>About</label>
                                            <div class="form-group label-floating">
                                            <textarea name="about" class="form-control" rows="2">{{$developer->about}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <button type="reset" class="btn btn-warning pull-right" >RESET</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection