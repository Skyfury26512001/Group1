@extends('admin.layouts.master')
@section('title','Admin Dashboard')
@section('specify_js')
    <script src={{asset('assets/admin/')."/js/pages/dashboard-2.init.js"}}></script>
@endsection
@section('content')
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                            <li class="breadcrumb-item active"><a href="javascript: void(0);">Dashboard</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card-box widget-box-four">
                                            <div id="dashboard-1" class="widget-box-four-chart"></div>
                                            <div class="float-left">
                                                <h4 class="mt-0 font-15 font-weight-medium mb-1 text-overflow" title="Total Revenue">Total Revenue</h4>
                                                <p class="font-secondary text-muted">Jan - Apr 2019</p>
                                                <h3 class="mb-0 mt-2"><span>$</span> <span data-plugin="counterup">5,2548</span></h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card-box widget-box-four">
                                            <div id="dashboard-2" class="widget-box-four-chart"></div>
                                            <div class="float-left">
                                                <h4 class="mt-0 font-15 mb-1 font-weight-medium text-overflow" title="Total Unique Visitors">Total Unique Visitors</h4>
                                                <p class="font-secondary text-muted">Jan - Apr 2019</p>
                                                <h3 class="mb-0 mt-2"><span>$</span> <span data-plugin="counterup">65,241</span></h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card-box widget-box-four">
                                            <div id="dashboard-3" class="widget-box-four-chart"></div>
                                            <div class="float-left">
                                                <h4 class="mt-0 font-15 mb-1 font-weight-medium text-overflow" title="Number of Transactions">Number of Transactions</h4>
                                                <p class="font-secondary text-muted">Jan - Apr 2019</p>
                                                <h3 class="mb-0 mt-2"><span>$</span> <span data-plugin="counterup">28,5960</span></h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <h4 class="header-title">Sales Revenue</h4>
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="mt-3 mb-3">
                                                            <h3 class="mb-2">2563</h3>
                                                            <p class="text-uppercase mb-1 font-13 font-weight-normal">Lifetime total sales</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mt-3 mb-3">
                                                            <h3 class="mb-2">6952</h3>
                                                            <p class="text-uppercase mb-1 font-13 font-weight-normal">Income amounts</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mt-3 mb-3">
                                                            <h3 class="mb-2">1125</h3>
                                                            <p class="text-uppercase mb-1 font-13 font-weight-normal">Total visits</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="morris-bar-stacked" style="height: 310px;" class="morris-charts"></div>

                                        </div>

                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->

                            </div><!-- end col -->


                            <div class="col-xl-4">
                                <div class="card-box text-center">
                                    <div class="text-center">
                                        <h5 class="font-weight-normal text-muted">Lifetime Sales</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 48948 <small>USD</small></h3>
                                    </div>

                                    <div id="morris-line-example" style="height: 180px;"  class="morris-charts"></div>

                                </div>


                                <div class="card-box">
                                    <h4 class="header-title mb-3">Recent Notifications</h4>

                                    <div class="mb-1">
                                        <p><span class="float-right text-dark">Mark Loyerdn</span> <span class="badge badge-primary">Visitor</span></p>
                                        <p class="mb-1">Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>
                                        <p><i>2 Min ago</i></p>
                                    </div>

                                    <div class="">
                                        <p><span class="float-right text-dark">Mark Loyerdn</span> <span class="badge badge-success">Seller</span></p>
                                        <p class="mb-1">Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>
                                        <p class="mb-0"><i>5 Hours ago</i></p>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Recent Users</h4>
                                    <p class="sub-header">
                                        Your awesome text goes here.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover">
                                            <thead class="bg-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->

                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2017 - 2019 &copy; Adminox theme by <a href="">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/admin/css/bootstrap-dark.min.css"
                            data-appStyle="assets/admin/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/admin/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/dark-rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch" data-bsStyle="assets/admin/css/bootstrap-dark.min.css"
                            data-appStyle="assets/admin/css/app-dark-rtl.min.css" />
                        <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/y2YAD" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

    @endsection