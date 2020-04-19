<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Vendease COVID-19 Fund | Home</title>
    <meta name="description" content="Vendease Covid Relief Fund">
    <meta name="keywords" content="onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Karim Ezzat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link href="{{ asset('assets/css/flexslider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/media-queries.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
</head>

<body id="body" class="light">
    <div id="preloader" class="dark">
        <div class="loader"> <span class="loader-inner">Loading...</span></div>
    </div>
    <header id="navigation" class="navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <i
                        class="fa fa-bars fa-2x color"></i> </button> <a class="navbar-brand" href="#body">
                    <h1 id="logo">
                        <img src="./assets/image/logoo.png" alt="COVID-19">
                    </h1>
                </a></div>
            <nav class="collapse navbar-collapse navbar-right">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"> <a href="#body">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#works">Field Tracker</a></li>
                    <li><a href="#works">Donation Tracker</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <div class="item active" style='background: url("./assets/image/banner.png");' >
                    <div class="carousel-caption">
                        <h2 class="wow  animated " style="position: relative; top: -182px;">
                            Feed the most vulnerable communities in Lagos affected by <span
                                class="red-color">COVID-19</span>
                        </h2>

                        <div class="margin-input">
                            <p class="donate-text">₦100,000 of ₦25,000,000 raised</p>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h3 class="wow  animated">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>

                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="m-t-20">
                        <a href="{{ url('donate')}}" class="btn btn-warm">Donate</a>
                            <p class="donate-btn-p">to support a household for 1 week</p>
                        </div>

                        <div class="caption-home col-md-offset-1">
                            <p class="intro">Over 10 million Lagosians dependent on daily income
                                are currently experiencing severe hunger.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center mb50">
                    <h2 class="black">About Us</h2>
                    <div class="divide"></div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <div class="row">
                            <p class="text-center col-md-8 col-md-offset-2 black">COVID-19 Feeding Support Fund for most
                                vulnerable communities in Lagos State is an emerging relief
                                initiative by Vendease and The Social Change Network Africa.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 m-t-40">
                                <div class="videoWrapper">
                                    <!-- Copy & Pasted from YouTube -->
                                    <iframe width="560" height="349"
                                        src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row m-t-80">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-4">
                                <img class="img img-responsive" src="./assets/image/fruit.png" alt="Fruit">
                            </div>
                            <div class="col-md-6">
                                <h4 class="black about-fruit">How does this work?</h4>
                                <p class="black">Each household will receive a box containing 1 week essential
                                    food supply such as Rice, Beans, Garri, Spaghetti, Tomato paste,
                                    Milk, Milo, Sugar, Maggi, etc</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="works" class="works clearfix">
        <div class="containers">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-6">
                        <h3 class="black">Field Update</h3>
                        <div class="divide-left m-b-50"></div>

                        <ul class="list-unstyled video-list-thumbs row">
                            <li class="col-lg-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <img src="./assets/image/1.png" alt="Field" class="img-responsive" height="auto" />
                                    <h2>Field Details... <span class="pull-right red-color">01/01/2020</span></h2>
                                </a>
                            </li>
                            <li class="col-lg-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <img src="./assets/image/1.png" alt="Field" class="img-responsive" height="auto" />
                                    <h2>Field Details... <span class="pull-right red-color">01/01/2020</span></h2>

                                </a>
                            </li>
                            <li class="col-lg-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <img src="./assets/image/1.png" alt="Field" class="img-responsive" height="auto" />
                                    <h2>Field Details... <span class="pull-right red-color">01/01/2020</span></h2>
                                </a>
                            </li>
                            <li class="col-lg-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <img src="./assets/image/1.png" alt="Field" class="img-responsive" height="auto" />
                                    <h2>Field Details... <span class="pull-right red-color">01/01/2020</span></h2>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-6">
                        <h3 class="black">Donation Tracker</h3>
                        <div class="divide-left m-b-50"></div>
                        <img class="img img-responsive" src="./assets/image/tracker.png" alt="Tracker">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center mb50">
                    <h2 class="color black" style="text-transform: capitalize;">Powered By:</h2>
                    <div class="devide"></div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img img-responsive" src="./assets/image/vendease.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <img class="img img-responsive" src="./assets/image/tscn.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact light-dark">
        <div class="container">
            <div class="row mb50">
                <div class="sec-title text-center mb50">
                    <h2 class="color-white">Contact us</h2>
                    <div class="divide"></div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 col-lg-offset-2 col-md-offset-2">
                    <div class="contact-form">
                        <form action="#" id="contact-form">
                            <div class="input-group">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                            <div class="input-group">
                                <input type="text" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Message" rows="8"
                                    class="form-control"></textarea>
                            </div>
                            <div class="input-group col-md-4 col-md-offset-5">
                                <input type="submit" id="form-submit" class="btn btn-warm text-center"
                                    value="Send message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer light-dark" style="padding: 0px 0px;">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <p class="copyright text-center" style="margin-top: 0px;">Copyright &copy; 2020. All rights reserved. <span
                            class="red-color">|</span> Covid Relief Fund</p>
                </div>
            </div>
        </div>
    </footer> <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.singlePageNav.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-countTo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>