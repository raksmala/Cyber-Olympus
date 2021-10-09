<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Unit Kegiatan Mahasiswa Politeknik Negeri Madiun">
        <meta name="author" content="Rendy Kharisma Aksmala">

        <link rel="shortcut icon" href="{{ asset('/assets/images/logo/km.png') }}">
        <title>Cyber Olympus</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
        
        <link href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert -->
        <link href="{{ asset('assets/plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css">

        <!-- Plugins css -->
        <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables/fixedColumns.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Croppie -->
        <link href="{{ asset('assets/croppie/croppie.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/croppie/demo/demo.css') }}" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    </head>

    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a>Cyber Olympus</a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">
                    <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            @include('layouts.nav')
        </header>
        <!-- End Navigation Bar-->

        <div class="wrapper">
            <div class="container">

                @yield('content')

                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                © 2021. Rendy Kharisma Aksmala.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
        </div>

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

        <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

        <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

        <!-- Tost-->
        <script src="{{ asset('/assets/libs/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

        <!-- toastr init js-->
        <script src="{{ asset('/assets/js/pages/toastr.init.js') }}"></script>

        <!-- Notification js -->
        <script src="{{ asset('/assets/plugins/notifyjs/js/notify.js') }}"></script>
        <script src="{{ asset('/assets/plugins/notifications/notify-metro.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

        <!-- Sweet-Alert  -->
        <script src="{{ asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>

        <!-- plugins js -->
        <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
     	<script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.js') }}"></script>
     	<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- page js -->
        <script src="{{ asset('assets/pages/jquery.form-pickers.init.js') }}"></script>

        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/pages/autocomplete.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>

        @yield('scripts')
    </body>
</html>