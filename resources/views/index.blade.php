
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digi Doctor</title>
    <link rel="stylesheet" href="{{asset('homepage')}}/css/animate.css"> <!-- Animate-->
    <link rel="stylesheet" href="{{asset('homepage')}}/css/all.css"> <!-- fontawsome -->
    <link rel="stylesheet" href="{{asset('homepage')}}/css/bootstrap.min.css"> <!-- bootstrap v3 -->
    <link rel="stylesheet" href="{{asset('homepage')}}/css/style.css"> <!-- main-style -->
   
</head>

<body  style="font-family: inherit;">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
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
                    <a class="logo" href="{{asset('/')}}">
                        <img src="{{asset('homepage')}}/images/Logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                       
                    <li><a href="{{asset('/')}}" class="active">Home</a></li>
                        <li><a href="{{asset('about')}}">About</a></li>
                        <li><a href="{{asset('service')}}">services</a></li>
                        <li><a href="{{asset('work')}}">our works</a></li>
                        <li><a href="{{asset('client')}}">clients</a></li>
                        <li><a href="{{asset('contact')}}">Contacts</a></li>
                        <li><a href="{{asset('blog')}}">blog</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- ./nav -->
    </div>
    <!-- ./header -->
    <!-- ****************************************** -->
    <!-- Home-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('homepage')}}/images/Layer 1.jpg">
                <div class="carousel-caption ">
                    <h1 class="animated bounceInDown">About Digi-Doctor.</h1>
                    <h2 class="animated bounceInDown">Write your SubHeadline</h2>
                    <a href="{{asset('/')}}"><button class="btn"> CTA</button></a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('homepage')}}/images/Layer 1.jpg">
                <div class="carousel-caption ">
                    <h1 class="animated bounceInDown">About Digi-Doctor.</h1>
                    <h2 class="animated bounceInDown">Write your SubHeadline</h2>
                    <a href="{{asset('/')}}"><button class="btn"> CTA</button></a>        
                        </div>
            </div>
            <div class="item">
                <img src="{{asset('homepage')}}/images/Layer 1.jpg">
                <div class="carousel-caption ">
                    <h1 class="animated bounceInDown">About Digi-Doctor.</h1>
                    <h2 class="animated bounceInDown">Write your SubHeadline</h2>
                    <a href="{{asset('/')}}"><button class="btn"> CTA</button></a>               
                 </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- ************************************ -->
    <div class="about ">
        <div class="container">
            <div class="row">
            @foreach($data['abouts'] as $about)
                <div class="info col-md-12 ">

                    <h3 class="wow fadeInDown" data-wow-duration="1s">About Us</h3>
                    <p class="wow fadeInRight" data-wow-delay="0.3s"> <p>{{$about->text}} </p>

                   
                       @endforeach
                    <a  href="{{asset('about')}}" class="btn btn-success">about us</a>  
                </div>

            </div>
        </div>
    </div> <!-- ./about -->

    <!-- main -->
    <div class="main">
        <div class="container">
            <div class="row">
            
                <div class="col-md-6">
              
                    <div class="info wow fadeInLeft " data-wow-delay="0.3s" data-wow-duration="0.8s">
                        <h3 class="h3-style">Our Main Services</h3>
                       
                        <ul>
                        @foreach($data['services'] as $service)
                            <li>{{$service->name}}</li>
                            @endforeach
                        </ul>
                        <a  href="{{asset('service')}}" class="btn btn-success">our services</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="{{asset('homepage')}}/img wow fadeInRight " data-wow-delay="0.3s" data-wow-duration="0.8s">
                        <img src="{{asset('homepage')}}/images/Layer 4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./main -->

    <!-- Samples -->
    <div class="samples">
        <div class="container">
            <h3 class="h3-style">Samples Of Our Work</h3>
            <div class="row">
            @foreach($data['works'] as $work)
                <div class="col-md-4 wow zoomIn " data-wow-delay="0.3s" data-wow-duration="0.8s">
                <img src="{{asset($work->image)}}" alt="" style ="width:100%; height:350px"> 
                
                </div>
                @endforeach
            </div> 
           
            <a href="{{asset('work')}}"><button class="btn">Our Work</button></a>
        </div>
    </div> <!-- ./samples -->

    <div class="clients">

        <h3 class="h3-style">Our clients</h3>
        <div class="row">
        @foreach($data['clients'] as $client)
            <div class="col-md-3  wow fadeInUp " data-wow-delay="0.3s" data-wow-duration="0.8s">
            <img src="{{asset($client->image)}}" alt="">
            <p>{{$client->name}}</p>
            </div>
            @endforeach
        </div> <!-- ./row -->
        <a  href="{{asset('client')}}" class="btn btn-success">our clients</a> 
    </div> <!-- ./clients -->

    <div class="contact">
        <div class="container">
            <div class="row">
           @foreach($data['contactus'] as $contact)
                <div class="col-md-12">
                    <h3 class="h3-style">Contact Us</h3>
                    <p>{{$contact->message}}</p>
                </div>
               @endforeach

            </div>
            <form id="formAddAdderss" action="{{ asset('addmessage')}}" method="post" enctype="multipart/form-data"> 
             {{csrf_field()}}
                <div class="form-group">
                    <label style="width:10%;text-align:center;">Name:</label>
                    <input type="text" class="form-control"name = "name">
                </div>

                <div class="form-group">
                    <label style="width:10%;text-align:center;">E-mail:</label>
                    <input type="email" class="form-control"name = "email">
                </div>

                <div class="form-group">
                    <label class="text-lable" style="width:12%;text-align:center;">Message:</label>
                    <textarea class="form-control" name = "message"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn ">Send</button>
                </div>

            </form>
        </div>
    </div> <!-- ./contact -->

 
    <div class="footer">
        <div class="container">
            <div class="footer-img">
                <img src="{{asset('homepage')}}/images/Logo.png">

            </div>
            <div class="info  wow fadeInRight " data-wow-delay="0.3s" data-wow-duration="0.8s ">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatibus eaque
                    ut minima eum cum ducimus saepe! Tempore ullam optio eligendi saepe labore,
                    recusandae eum cum, suscipit dolorum sit aut?</p>
            </div>
            <div class="social  wow fadeInRight " data-wow-delay="0.3s" data-wow-duration="0.8s">
                <a href="https://www.facebook.com/?stype=lo&jlou=Afdsj4O19ZNU-FZihnIJ0XUyypaDmDgdVhbC4K8VVsmCQqlhSwxDpqvNihn8eAn5MSdXsWqiTFQ986FE9RSyDjy5dEzWbn70vaR7-WjrVNtVMg&smuh=6222&lh=Ac_PZQz3MqVOzOwa"><img src="{{asset('homepage')}}/images/facebook.svg"></a>
                <a href=" https://www.instagram.com/accounts/login/"><img src="{{asset('homepage')}}/images/instagram.svg"></a>
                <a href="https://www.linkedin.com/uas/login"><img src="{{asset('homepage')}}/images/linked.svg"></a>
                <a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="{{asset('homepage')}}/images/you.svg"></a>
                <a href="https://web.whatsapp.com/"><img src="{{asset('homepage')}}/images/whats.svg"></a>
               
            </div>
            <span>copyright &copy; 2020 All right Reserved To Digi Doctor &reg; Designed and Developed By
                :Martions Tech.</span>
        </div>
    </div>

    <script src="{{asset('homepage')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('homepage')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('homepage')}}/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
   
</body>

</html>