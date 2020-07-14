
<!DOCTYPE html>
<html>
<head>
    <!--css-->
	<link rel="styleSheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/style.css">
<!--./css-->
</head>
<body>
<!--vertical nav-->
<nav class="nav">
    <h4>Name OF Admin</h4>
    <ul>
    <li> <a href="{{asset('dashboard')}}">Dashboard</a></li>
     <li><a href="{{asset('adminsummery')}}">HomePage</a></li>
     <li> <a href="{{asset('adminabouts')}}">About</a></li> 
     <li><a href="{{asset('admincontacts')}}">Contact</a></li>
     <li><a href="{{asset('adminservice')}}">Services</a></li>
     <li><a href="{{asset('adminworks')}}">Our Work</a></li>
     <li> <a href="{{asset('adminclients')}}">Our Client</a></li> 
     <li> <a href="{{asset('adminposts')}}">posts</a></li> 
     <li> <a href="{{asset('adminmedia')}}">social media</a></li>
     <li> <a href="{{asset('admincore')}}">Digi Core</a></li>
    
    </ul>
</nav>
<!--./ vertical nav-->

<!--horzintal nav-->
<nav class="navbar navbar-expand-lg navbar-light nav2">
    <div style="width: 70%;text-align: right;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-gear" style="position: relative;top: 6px;"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{asset('/')}}">Web Site</a>
            <a class="dropdown-item" href="{{asset('profile')}}">Edit Admin Profile</a>
            <a class="dropdown-item" href="{{asset('logout')}}">Log Out</a>
          </div>
        </li>
      </ul>
     
    </div>
  </nav>
<!--./horzintal nav-->

<!--home state-->
 <div class="home-stats ">
    <div class="container  text-center ">
   
    <div class="row">
    
        <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px;">
        <div class="stat st-members">
            <i class="fa fa-users"></i>
            <div class="info">
            All Clients
            <!--يتم استرجاع رقم عدد الاعضاء من الداتا بيز-->
            <span><a href="{{asset('adminclients')}}">{{ $clients }} </a></span>
            </div>
            </div>
        </div>
       
      
        <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px;">
        <div class="stat st-pending">
            <i class="fa fa-user-plus"></i>
            <div class="info">
            All Works
            <!--يتم استرجاع رقم عدد الانواع من الداتا بيز-->
            <span><a href="{{asset('adminworks')}}">{{ $works }}</a></span>
            </div>
            </div>
        </div>
     

       <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px;">
        <div class="stat st-items">
            <i class="fa fa-tag"></i>
            <div class="info">
            All Posts 
            <!--يتم استرجاع رقم عدد المنتجات من الداتا بيز-->
            
           <span><a href="{{asset('adminposts')}}">{{ $posts}}</a></span>
            </div>
            </div>
           
        </div>
       
       
        <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px;">
        <div class="stat st-comments">
            <i class="fa fa-comments"></i>
            <div class="info">
           All Services
            <!--يتم استرجاع رقم عدد الطلبات من الداتا بيز-->
            <span>
                <a href="{{asset('adminservice')}}">{{ $services }}</a>
                </span>
            </div>
            </div>
        </div>
       

        </div>

    </div>
</div>
<!--./ home state-->
    <!--script-->
    <script src="{{asset('frontEnd')}}/js/jquery-3.1.0.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
    <!--./script-->
</body>
</html>