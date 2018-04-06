﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>NCPO Online Registrations Site</title>
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
     <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!--  Font-Awesome Animation Style -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
     <!--  Custom Style -->
    <link href="assets/css/style_home.css" rel="stylesheet" />
    <style>
        .carousel{
            height: 200px;
        }
    </style>
</head>
<body>
    <?php include 'assets/includes/nav.php'; ?>
    <!--./ Top Menu End -->
    <div class="div-social-top">
        <div class="container">
            <i class="fa fa-globe "></i>
            FB Page: NCPO Naga  | <i class="fa fa-mobile "></i>
            Call: :  (054) 473.3537 / (054) 478.8918.  |  <i class="fa fa-map-marker "></i>
            Country : PH &nbsp;
            <a href="#"> <i class="fa fa-facebook-square "></i> </a>
            <a href="#"> <i class="fa fa-linkedin-square "></i> </a>
            <a href="#"> <i class="fa fa-pinterest-square "> </i> </a>
        </div>
        
    </div>
    <div class="middle-section">
        <h1 style="color: #ff6a00" class="font-weight-bold mt-4">Steps to Apply Naga City Police Clearance</h1>
        <div id="testimonials" class="carousel slide container" data-ride="carousel">
            <div class="carousel-inner mt-lg-5" role="listbox">
                <div class="carousel-item item active">
                    <h4 class="w-75 container">
                        <i class="fa fa-quote-left"></i>
                        Fill Out the form and Please take note of your reference code after registration (Estimate duration: 5 minutes) 
                        <i class="fa fa-quote-right"></i>
                    </h4>
                    <h5 class="pull-right font-weight-bold">Online Registration</h5>
                </div>
                <div class="carousel-item item">
                    <h4 class="w-75 container">
                        <i class="fa fa-quote-left"></i>
                        Go to Verification Panel to send us the reservation for the application 
                        <i class="fa fa-quote-right"></i>
                    </h4>
                    <h5 class="pull-right"> <b>Verification Process</b> </h5>
                </div>
                <div class="carousel-item item">
                    <h4 class="w-75 container">
                        <i class="fa fa-quote-left"></i>
                        Present the following requirements in the NCPO naga along with your reference number and payment.
                        <i class="fa fa-quote-right"></i>
                    </h4>
                    <h5 class="pull-right"> <b>Claiming Cleance in NCPO</b> </h5>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials" data-slide-to="1"></li>
                <li data-target="#testimonials" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div id="service-info" class="pad-top-botm container">
        <h3 class="font-weight-bold text-primary"> 
            Police Commisions Relation in Naga City Police Office  Online Registration System.
        </h3>
        <div class="row pad-top-botm">
            <div class="col-4">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="pull-left mr-2">
                            <i class="  fa fa-globe fa-4x rotate-icon  "></i>
                        </div>
                        <h3 class="card-title font-weight-bold">Online <br> Registration</h3>
                        <p class="card-text">
                            Fill out the registration form. Upon Completion of registering online. You will also recieve a notification via email of the reference number. please check your email.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="pull-left mr-2">
                            <i class="  fa fa-camera fa-4x rotate-icon "></i>
                        </div>
                        <h3 class="card-title font-weight-bold">Picture Upload</h3>
                        <p class="card-text">
                            Taking photo on site. you can also upload your photo online and must wear shirts with collar
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="pull-left mr-2">
                            <i class="fa fa-print fa-4x rotate-icon "></i>
                        </div>
                        <h3 class="card-title font-weight-bold">Printing</h3>
                        <p class="card-text">Present the Requirements Needed and payment to recieve the police clearance form</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Initialize Carousel
            $('.carousel').carousel({
                interval: 2000 //TIME IN MILLI SECONDS
            })
        });
    </script>
</body>
</html>
