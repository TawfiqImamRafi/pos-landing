<!DOCTYPE html>
<html lang="zxx">  
    
<!-- Mirrored from rstheme.com/products/html/braintech/onepage9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 06:11:33 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Karbari Application</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
        <div class="offwrap"></div>
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            @include('frontend.layouts.header')
            <!--Full width header End-->

            @yield('main_content')
        <!-- Main content End -->
     
        <!-- Footer Start -->
        @include('frontend.layouts.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

         <!-- modernizr js -->
        <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('assets/js/rsmenu-main.js') }}"></script>
        <!-- op nav js -->
        <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script> 
         <!-- counter top js -->
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>   
        <!-- particles js -->
        <script src="{{ asset('assets/js/particles.min.js') }}"></script>  
        <!-- magnific popup js -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>      
        <!-- plugins js -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <!-- pointer js -->
        <script src="{{ asset('assets/js/pointer.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('assets/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

<!-- Mirrored from rstheme.com/products/html/braintech/onepage9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 06:11:33 GMT -->
</html>