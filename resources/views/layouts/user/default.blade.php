

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>academyfemcoders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!--
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE
    DESIGNED & DEVELOPED by FreeHTML5.co

    Website: 		http://freehtml5.co/
    Email: 			info@freehtml5.co
    Twitter: 		http://twitter.com/fh5co
    Facebook: 		https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Pricing -->
    <link rel="stylesheet" href="css/pricing.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">

        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href='{{route('home')}}'><i class=""></i>academy<span></span></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active">
                                <a href='{{route('home')}}' >
                                    Accueil
                                </a>
                            </li>
                            <li class="active">
                                <a href='{{route('cours')}}'>
                                    Courses
                                </a></li>

                            <li><a href='{{route('laboratoire')}}'>
                                    laboratoire
                                </a></li>

                            <li><a href='{{route('equipe')}}'>
                                    equipe
                                </a></li>

                            <li class="has-dropdown">
                                <a href='{{route('soutien')}}'>soutien</a>
                                <ul class="dropdown">
                                    {{--<li><a href='{{route('partenaires')}}'>partenaires</a></li>--}}
                                    <li><a href='{{route('volontariat')}}'>volontariat</a></li>
                                </ul>
                            </li>
                            <li><a href='{{route('contact')}}'>contact</a></li>



                            <li class="btn-cta"><a href='{{route('logout')}}'><span>Déconnection<span></a></li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->


        @yield('content')



        <footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 fh5co-widget">
                        <h3>About Education</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                        <h3>Learning</h3>
                        <ul class="fh5co-footer-links">
                            <li class="active">
                                <a href='{{route('cours')}}'>
                                    Courses
                                </a></li>

                            <li><a href='{{route('laboratoire')}}'>
                                    laboratoire
                                </a></li>

                            <li><a href='{{route('equipe')}}'>
                                    equipe
                                </a></li>

                            <li class="has-dropdown">
                                <a href='{{route('soutien')}}'>soutien</a>

                            </li>
                            <li><a href='{{route('contact')}}'>contact</a></li>
                        </ul>
                    </div>
{{--
                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                        <h3>Learn &amp; Grow</h3>
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Handbook</a></li>
                            <li><a href="#">Held Desk</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                        <h3>Engage us</h3>
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Visual Assistant</a></li>
                            <li><a href="#">System Analysis</a></li>
                            <li><a href="#">Advertise</a></li>
                        </ul>
                    </div>
--}}

                </div>



                <div class="row copyright">
                    <div class="col-md-12 text-center">

                        <div class="fh5co-nav" role="navigation">
                            <h6>Suivez nous</h6>
                            <p>Suivez nous sur les réseaux sociaux</p>
                            <div class="footer-social d-flex align-items-center">

                             </div>
                        </div>

                        <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;2017-<script>document.write(new Date().getFullYear());</script> Tous droit reservé |  <a href="http://foundation.rachaelo.com" target="_blank">Rachael Orumor NGO</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
    <script>
        var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>
</body>
</html>
