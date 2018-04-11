<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>MuseScore Developer's Portal</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

    @include('layouts.js')

    <div class="section section-signup page-header" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-signup">
                        <form class="form" method="" action="">
                            <div class="card-header card-header-primary text-center">
                                <h4>Sign Up</h4>
                                <div class="social-line">
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="text-divider">Or Be Classical</p>
                            <div class="card-body">
                                    <span class="bmd-form-group"><div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input class="form-control" placeholder="First Name..." type="text">
                                    </div></span>
                                <span class="bmd-form-group"><div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input class="form-control" placeholder="Email..." type="email">
                                    </div></span>
                                <span class="bmd-form-group"><div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input class="form-control" placeholder="Password..." type="password">
                                    </div></span>
                                <!-- If you want to add a checkbox to this form, uncomment this code

          <div class="form-check">
              <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="">
                  Subscribe to newsletter
                  <span class="form-check-sign">
                      <span class="check"></span>
                  </span>
              </label>
          </div> -->
                            </div>
                            <div class="card-footer justify-content-center">
                                <a href="#pablo" class="btn btn-link btn-primary btn-lg">Get Started</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>







