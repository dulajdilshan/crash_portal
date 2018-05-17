@extends('layouts.admin.admin_layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Crash Reports</p>
                            <h3 class="title">{{$crashes->count()}}
                                <small>(Upto now)</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-info">info</i>
                                <a href="/admin/crashes">Go to crashes...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">assignment_ind</i>
                        </div>
                        <div class="card-content">
                            <p class="category">No of Developers</p>
                            <h3 class="title">{{$developers->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">assignment_ind</i>
                                <a href="/admin/developers_manager">Go to Developers...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Solved Crashes</p>
                            <h3 class="title">{{$crashes->where('progress',100)->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i>
                                <a href="/admin/crashes">Go to crashes...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="fa fa-star-half"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Newly added Crashes</p>
                            <h3 class="title"></h3>
                            <small>{{$newcrash->first()->report_created_at}}</small>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Notifications</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                </thead>
                                <tbody>
                                @foreach($notifications as $not)
                                <tr>
                                    <td>{{$not->id}}</td>
                                    <td>{{$not->title}}</td>
                                    <td>{{$not->description}}</td>
                                    <td>{{$not->created_at}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <form method="post" action="{{url('admin/send')}}">{{ csrf_field() }}
                            <input name="all" type="text" class="form-control" placeholder="Include all?">
                            <input name="admin_only" type="text" class="form-control" placeholder="Admins Only?">
                            <input name="developer_id" type="text" class="form-control" placeholder="Developer ID">
                            <input name="title" type="text" class="form-control" placeholder="Title">
                            <input name="description" type="text" class="form-control" placeholder="Description">
                            <button type="submit" class="btn btn-primary pull-right">Send</button>
                            <button type="reset" class="btn btn-warning pull-right" >Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection