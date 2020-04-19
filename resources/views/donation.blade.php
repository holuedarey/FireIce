<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Vendease COVID-19 | Donation</title>
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
    <style>
        .form-control {
            background: #fff !important;
            color: #080808;
            border: 1px solid #aaaaaa;
        }
    </style>
</head>

<body id="body" class="light">
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
    <section id="works" class="works clearfix" style="padding-top: 150px;">
        <div class="containers">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-4">
                        <h3 class="black">
                            <img class="img img-responsive" src="./assets/image/logo-menu.png" alt="Logo" />
                        </h3>
                        <p class="black col-md-8 m-b-50" style="margin-top: 35%; font-size: 20px;">
                            “Helping one household might not change the whole world,
                            but it could change the world for one household”
                        </p>

                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <h1 class="color-green">₦100,000 <span class="color-green small-color-green">of ₦25,000,000
                                raised </span></h1>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100" style="width:20%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    <div class="input-group col-md-3">
                                        <span class="input-group-addon">₦</span>
                                        <input id="amount" type="text" class="form-control" name="msg" value="5000">
                                    </div>
                                    <div class="m-t-20">
                                        <span class="box">₦1,000</span>
                                        <span class="box">₦5,000</span>
                                        <span class="box">₦10,000</span>
                                        <span class="box  margin-xs">Give a Custom Amount</span>
                                    </div>
                                    <div class="m-t-40">
                                        <p class="black">Select Payment Method</p>
                                        <div class="input-group" style="padding-left: 0px;">
                                            <label class="checkbox-inline black"
                                                style="padding-left: 0px !important"><input type="radio"
                                                    value="paystack"> Paystack</label>
                                            <label class="checkbox-inline black"><input type="radio" value="offline">
                                                Offline Donation</label>
                                        </div>
                                        <div class="m-t-20 black">
                                            <p>Personal Info</p>
                                            <div class="col-md-6" style="padding-left: 0px;">
                                                <input type="text" class="form-control" name="fName"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="LName" value="Last Name">
                                            </div>
                                            <div class="input-group">
                                                <label class="checkbox-inline black"><input class="color-green"
                                                        type="checkbox" value="paystack"> Make this an anonymous
                                                    donation. <span
                                                        class="fa fa-info-circle color-green"></span></label>
                                            </div>
                                        </div>
                                        <div class="m-t-20">
                                            <div class="input-group col-md-6">
                                                <span class="input-group-addon">Donation Total:</span>
                                                <input id="amount" type="text" class="form-control" name="msg"
                                                    value="5000">
                                            </div>
                                        </div>

                                        <div class="hidden">
                                            <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                                            <input type="hidden" name="quantity" value="3">
                                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >
                                             {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                             {{-- required --}}
                                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
                                             {{-- required --}}
                                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                                
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                
                                
                                        </div>
                                        <div class="m-t-20">
                                            <button type="submit" class="btn btn-green">Donate</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer light-dark" >
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
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js')}}"></script>

</body>

</html>