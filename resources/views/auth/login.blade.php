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

    <!-- modernizr css -->
    <script src="{{ URL::asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!-- page container area start -->
    <div class="page-container">
 

           
            <div class="main-content-inner">

            <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="mt-5 text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Username" id="username" class="form-control" name="username" required
                                    autofocus>
                                @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

            
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


</body>

</html>
