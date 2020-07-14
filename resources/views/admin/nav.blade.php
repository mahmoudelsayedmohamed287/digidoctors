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
     <li> <a href="{{asset('adminmedia')}}">Social Media</a></li> 
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
  @yield('content')
  <script src="{{asset('frontEnd')}}/js/jquery-3.1.0.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
    <!--./script-->
</body>
</html>