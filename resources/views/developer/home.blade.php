<!DOCTYPE html>
<html lang="en">



<body>
    
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Your Crashes</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">Total Crashes</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">New Messages</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary">157</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Status</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #dadada;"></i>Site A View</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>Site B View</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Crashes
                                <div class="col-md-2 col-sm-4 col-xs-12 pull-right">
                                    <select class="form-control pull-right row b-none">
                                        <option>March 2016</option>
                                        <option>April 2016</option>
                                        <option>May 2016</option>
                                        <option>June 2016</option>
                                        <option>July 2016</option>
                                    </select>
                                </div>
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>CRASH NAME</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>Enrollemmt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="txt-oflo">Lyrics not loading</td>
                                            <td>45</td>
                                            <td class="txt-oflo">April 18</td>
                                            <td><span class="text-success">34</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Buttons no working</td>
                                            <td>34</td>
                                            <td class="txt-oflo">April 19</td>
                                            <td><span class="text-info">50</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">not loading editot</td>
                                            <td>12</td>
                                            <td class="txt-oflo">April 20</td>
                                            <td><span class="text-danger">-24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Keyboard not working</td>
                                            <td>56</td>
                                            <td class="txt-oflo">April 21</td>
                                            <td><span class="text-success">24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">symbols</td>
                                            <td>33</td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Digital Agency</td>
                                            <td>22</td>
                                            <td class="txt-oflo">April 23</td>
                                            <td><span class="text-danger">-14</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Help not loading</td>
                                            <td>21</td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">64</span></td>
                                        </tr>
                                    </tbody>
                                </table> <a href="#">See All</a> </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->

                <!--
                
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Novus </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    
</body>

</html>
