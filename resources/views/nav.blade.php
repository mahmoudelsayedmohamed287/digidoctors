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

<body style="font-family: inherit;">
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
   


    @yield('content')

    
 
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

<div id="google_translate_element"></div>


</body>

</html>