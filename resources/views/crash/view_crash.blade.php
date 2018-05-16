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

<div id="viewCrash{{$crash->id}}" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        {{--<div class="modal-header">--}}
            {{--<span class="close">&times;</span>--}}
        {{--</div>--}}
        <div class="modal-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group label-floating">
                        <label class="control-label">Crash ID</label>
                        <input type="text" class="form-control" value="{{$crash->id}}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group label-floating">
                        <label class="control-label">Category</label>
                        <input type="text" class="form-control" value="{{$crash->category}}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group label-floating">
                        <label class="control-label">Created at</label>
                        <input type="text" class="form-control" value="{{$crash->report_created_at}}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group label-floating">
                        <label class="control-label">Reported By</label>
                        <input type="text" class="form-control" value="{{$crash->reporter_id}}" disabled readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Report Details</label>
                        <input type="text" class="form-control" value="{{$crash->crash_details}}" disabled readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Assigned Developer</label>
                        <input type="text" class="form-control" value="{{$crash->name}}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Progress / Solved ?</label>
                        <input type="text" class="form-control" value="{{$crash->progress}} %" disabled readonly>
                    </div>
                </div>
            </div>
            <div class="form-group label-floating">
                <label class="control-label">Development Status</label>
                <input type="text" class="form-control" value="{{$crash->development_status}}" disabled readonly>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-info" id="okay{{$crash->id}}" onclick="notViewCrash(this)">Okay</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Delete Crash--}}
<div id="deleteCrash{{$crash->id}}" class="modal2">
    <div class="modal-content">
        <div class="modal-body">
            <form method="post" action="{{url('admin/crash/delete')}}"> {{ csrf_field() }}
                <div class="row" style="font-size: large">
                    Are you sure want to delete Crash No: <b>{{$crash->id}}</b>?
                    <input name="crash_id" value="{{$crash->id}}" hidden>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <button type="reset" id="no{{$crash->id}}" class="btn btn-primary" onclick="notDeleteCrash(this)">No</button>
                    <button type="submit" class="btn btn-rose" >Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function viewCrash(e) {
        var id = e.id;
        var k = parseInt(id.substr(4,120));
        var modalx = document.getElementById("viewCrash"+id.substr(4,120));
        modalx.style.display = "block";
    }

    function notViewCrash(e) {
        var id = e.id;
        var modalx = document.getElementById("viewCrash"+id.substr(4,120));
        modalx.style.display = "none";
    }

    function viewDeleteCrash(e) {
        var id = e.id;
        var modalx = document.getElementById("deleteCrash"+id.substr(6,120));
        modalx.style.display = "block";
    }

    function notDeleteCrash(e) {
        var id = e.id;
        var modalx = document.getElementById("deleteCrash"+id.substr(2,120));
        modalx.style.display = "none";
    }
</script>