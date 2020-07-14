<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Martians Tech</title>
    <link rel="stylesheet " href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
    <link rel="stylesheet" href="{{asset('homepage')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('homepage')}}/css/all.css">
    <link rel="stylesheet" href="{{asset('homepage')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('homepage')}}/css/style.css">
</head>

<body>

    <!-- Header -->
    <div class="header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#">
                        <img src="{{asset('homepage')}}/images/logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="#services">Service</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contacts">Contact</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- ./nav -->
    </div>
    <!-- ./header -->
    <!-- ******************************************* -->
    <!-- Home -->
    <div class="home pad-y" data-stellar-background-ratio="0.5">
        <div class="container ">
            <div class="row">
                <!-- home-content div -->
                <div class="col-md-8">
                    <div class="home-content">
                        <h1>manage your company with flexibility</h1>
                        <p>do not worry about administrative and financial transactions with EPR system</p>
                        <a href="#"><button class="btn-con">Contact Us</button></a>
                        <a href="#"><button class="btn-serve">Our Services</button></a>
                    </div>
                </div>
                <!-- image div -->
                <div class="col-md-4">
                    <div class="home-img wow fadeInDown" data-wow-duration="1s">
                        <img src="{{asset('homepage')}}/images/slider.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Home -->
    <!-- ********************************* -->
    <!-- digital  -->
    <div class="digital pad-y " data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="digital-info wow fadeInUp " data-wow-delay="0.4s" data-wow-duration="1s">
                        <!-- about-info -->
                        <h2>Start to be Digital</h2>
                        <span>Now!!</span>
                        <p>To Grow your company faster Be the best choice of your customers Win customers from all over
                            the world</p>
                        <a href="#"><button class="btn-serve">Our Services</button></a>
                    </div>
                </div> <!-- ./first sec -->
                <div class="col-md-6 col-sm-12">
                    <div class="digital-img wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s">
                        <img src="images/Blach hole.png">
                    </div>
                </div> <!-- ./second sec -->
            </div>
        </div>
    </div>
    <!-- ./digital  -->
    <!-- **************************** -->
    <!-- Service -->
    <div class="service pad-y" id="services" data-stellar-background-ratio="0.5">
        <div class="container">

            <div class="serv-info">
                <h2>Our Services</h2>
                <p>We offer many services hoping to be part of an effective and profitable digital world</p>
            </div> <!-- ./serve-info -->
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="serv-item web">
                        <a href="#"><img src="{{asset('homepage')}}/images/Web.png"> </a>
                    </div> <!-- ./first img -->
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="serv-item ERP">
                        <a href="#"><img src="{{asset('homepage')}}/images/ERP.png"> </a>
                    </div> <!-- ./second img -->
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="serv-item mobile">
                        <a href="#"><img src="{{asset('homepage')}}/images/Mobile .png"> </a>
                    </div> <!-- ./third img -->
                </div>
            </div>
        </div>
    </div>
    <!-- ./Services -->
    <!-- ****************************** -->
    <!-- choose  -->
    <div class="choose pad-y" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="choose-img wow slideInLeft" data-wow-delay="0.2s">
                        <img src="{{asset('homepage')}}/images/Open space composotion.png">
                    </div>
                </div> <!-- ./first sec -->

                <div class="col-md-6 col-sm-12">
                    <div class="choose-info">
                        <!-- choose-info -->
                        <h3>Why choose Martians for Al solutions?</h3>
                        <p>Enhance your creativity.Unlock new possibilities Boost productivity. Amplify your imapact.
                            We embed Al capabilities i our software to provide you with more intellgent,automated
                            solutions</p>
                        <a href="#"><button class="btn-serve">Our Services</button></a>
                    </div>
                </div> <!-- ./second sec -->
            </div>
        </div>
    </div>
    <!-- ./choose-->
    <!-- *********************** -->
    <div class="solutions pad-y" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="sol-info">
                <h2>Al Solution</h2>
                <p>From machine learning, to computer vision,
                    to forecasting and optimization,
                    out technologies support diverse environments and scale to meet changing business needs. </p>
            </div> <!-- ./sol-info -->
            <div class="row">
                <div class="col-md-6">
                    <div class="sol-item wow zoomIn" data-wow-delay="0.5s" data-wow-duration="0.5s">
                        <img src="{{asset('homepage')}}/images/Computer vision.png">
                    </div>
                </div> <!-- first-item -->

                <div class="col-md-6">
                    <div class="sol-item data wow zoomIn" data-wow-delay="0.5s" data-wow-duration="0.5s">
                        <img src="{{asset('homepage')}}/images/Data science.png">
                    </div>
                </div> <!-- sec-item -->

            </div>
        </div>
    </div>
    <!-- ./Solutions -->
    <!-- ***************************** -->
    <!-- Crew -->
    <div class="crew pad-y" id="team" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="crew-info wow fadeInUp" data-wow-delay="0.1s">
                <h2>Martians Mission Crew</h2>
                <p>The Supreme Council for the Leadership of the Martians Mission on Earth</p>
            </div> <!-- ./crew-info -->
            <div class="row">
                <div class="col-md-3">
                    <div class="crew-item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="2s">
                        <div class="astronaut-img ">
                            <img src="{{asset('homepage')}}/images/Astronaut with scooter.png">
                        </div> <!-- img -->
                        <div class="astronaut-info leader ">
                            <h4>ahmed shelbaya</h4>
                            <p>cheif executive officer.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- first item -->


                <div class="col-md-3">
                    <div class="crew-item  wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="2s">
                        <div class="astronaut-img business">
                            <img src="{{asset('homepage')}}/images/briefcase.png">
                        </div> <!-- img -->
                        <div class="astronaut-info business">
                            <h4>hager samir</h4>
                            <p>business development manager.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- second item -->


                <div class="col-md-3">
                    <div class="crew-item  wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="2s">
                        <div class="astronaut-img edu">
                            <img src="{{asset('homepage')}}/images/Astronaut with book.png">
                        </div> <!-- img -->
                        <div class="astronaut-info edu">
                            <h4>nada elsharaawy</h4>
                            <p>education manager.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- third item -->

                <div class="col-md-3">
                    <div class="crew-item  wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="2s">
                        <div class="astronaut-img tech">
                            <img src="{{asset('homepage')}}/images/Astronaut 2.png">
                        </div> <!-- img -->
                        <div class="astronaut-info tech">
                            <h4>mohamed gamal</h4>
                            <p>cheif technical officer.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- fourth item -->
            </div> <!-- ./row -->
        </div>
    </div> <!-- ./crew -->
    <!-- *********************************** -->

    <!-- contact -->
    <div class="contact pad-y" id="contacts" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>about</h4>
                    <ul>
                        <li><a href="#">history</a></li>
                        <li><a href="#">our team</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div> <!-- ./first col -->


                <div class="col-md-4">
                    <h4>services</h4>
                    <ul>
                        <li><a href="#">websites</a></li>
                        <li><a href="#">mobile apps</a></li>
                        <li><a href="#">alsolutions</a></li>
                        <li><a href="#">ERP system</a></li>
                        <li><a href="#">hardware solutions</a></li>
                    </ul>
                </div> <!-- ./sec col -->

                <div class="col-md-4">
                    <h4>Martians MI </h4>
                    <p>interestrd in every thing related to Education ,Culture and Technology</p>
                    <img src="images/one of martians MI.png">
                    <img src="images/one of martians co1.png">
                    <div class="info wow fadeInRight" data-wow-delay="0.1s">
                        <h5 class="mg-t">01099870453</h5>
                        <h5>01022665636</h5>

                        <ul class="our-social">
                            <li><a href="#"><i class="fab fa-instagram "></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- ./third col -->

            </div>
        </div>
    </div>

    <script src="{{asset('homepage')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('homepage')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('homepage')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('homepage')}}/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{asset('homepage')}}/js/main.js"></script>
</body>

</html>