<!doctype html>
<html class="no-js" lang="ar" style="direction:rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css')}}">
    <style>
        .card{
            text-align:right !important
        }
        td form{
            display :inline !important
        }
        select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 12px);
}
    </style>
    @yield('custome-css')

    <!-- modernizr css -->
    <script src="{{ URL::asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{ URL::asset('assets/images/icon/logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="ti-dashboard"></i>
                                    <span>المستخدمين</span>
                                </a>
                                <ul class="collapse">
                                    <li class="active"><a href="index.html">اضافة</a></li>
                                    <li><a href="index2.html">عرض</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="ti-user"></i>
                                    <span>المحاضرين</span>
                                </a>
                                <ul class="collapse">
                                    <li class=""><a href="index.html">اضافة</a></li>
                                    <li><a href="index2.html">عرض</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="ti-package"></i>
                                    <span>المساقات</span>
                                </a>
                                <ul class="collapse">
                                    <li class=""><a href="index.html">اضافة</a></li>
                                    <li><a href="index2.html">عرض</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="ti-dashboard"></i>
                                    <span>الشعب</span>
                                </a>
                                <ul class="collapse">
                                    <li class=""><a href="index.html">اضافة</a></li>
                                    <li><a href="index2.html">عرض</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="ti-book"></i>
                                    <span>المحاضرات</span>
                                </a>
                                <ul class="collapse">
                                    <li class=""><a href="index.html">اضافة</a></li>
                                    <li><a href="index2.html">عرض</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="ti-user"></i>
                                    <span>الطلبة</span>
                                </a>
                                <ul class="collapse">
                                    <li class=""><a href="index.html">اضافة</a></li>
                                    <li><a href="index2.html">عرض</a></li>
                                    <li><a href="index2.html">تسجيل طالب في شعبة</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="ti-write"></i>
                                    <span>الحضور</span>
                                </a>
                                <ul class="collapse">
                                    <li class=""><a href="index.html">اضافة</a></li>
                                    <li><a href="index2.html">عرض</a></li>
                                </ul>
                            </li>
                             
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-right">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                         
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-left">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="settings-btn">
                                <i class="ti-key"></i>
                                خروج
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
           
            <div class="main-content-inner">
            @yield('content')
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="{{ URL::asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{ URL::asset('assets/js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{ URL::asset('assets/js/pie-chart.js')}}"></script>
    <!-- others plugins -->
    <script src="{{ URL::asset('assets/js/plugins.js')}}"></script>
    <script src="{{ URL::asset('assets/js/scripts.js')}}"></script>
            @yield('custome-js')


</body>

</html>
