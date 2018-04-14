@extends('layouts.admin.admin_layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <button class="btn btn-primary" onclick="location.href='{{ url('developer/crashes#14') }}'">< Go Back</button>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Crash Title</h4>
                            {{--<p class="category">Complete your profile</p>--}}
                        </div>
                        <div class="card-content">
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">CRASH ID</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">REPORTED BY</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">CATEGORY</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">REPORT CREATED AT</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>REPORT DETAILS</label>
                                        <div class="form-group label-floating">
                                            {{--<input type="text" class="form-control" value="Suspended">--}}
                                            <textarea class="form-control" rows="4">
                                                {{--Write something in here --}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">PROGRESS</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">SOLVED ?</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>DEVELOPMENT STATUS</label>
                                            <div class="form-group label-floating">
                                                <label class="control-label"></label>
                                                <textarea class="form-control" rows="5">
                                                    NO STATUS YET
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success pull-right" disabled>PUBLISH CHANGES</button>
                                <button type="reset" class="btn btn-warning pull-right" disabled>RESET</button>
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
                            <h4 class="card-title">Alec Thompson</h4>
                            <p class="card-content">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            {{--<a href="#pablo" class="btn btn-primary btn-round">Follow</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection