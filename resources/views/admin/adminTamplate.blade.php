<!DOCTYPE html>
<html>
<head>
    <!--css-->
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/style.css">
<!--./css-->
</head>
@yield('content')

<body style="background-image: url('frontEnd')/image/admin_panel.jpg);">
<!--vertical nav-->
<nav class="nav">
    <h4>Name OF Admin</h4>
    <ul>
     <li> <a href="Dashboard.html">Dashboard</a></li>
     <li><a href="HomePage.html">HomePage</a></li>
     <li> <a href="about.html">About</a></li> 
     <li><a href="contact.html">Contact</a></li>
     <li><a href="services.html">Services</a></li>
     <li><a href="our_work.html">Our Work</a></li>
     <li> <a href="our_client.html">Our Client</a></li> 
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
            <a class="dropdown-item" href="#">Web Site</a>
            <a class="dropdown-item" href="adminProfile.html">Edit Admin Profile</a>
            <a class="dropdown-item" href="#">Log Out</a>
          </div>
        </li>
      </ul>
     
    </div>
  </nav>
<!--./horzintal nav-->

<!--start home page-->
<div class="homePage">
    <div class="container">
       <h1>Slider Cover</h1>
       <div class="table-responsive">
        <table class="main-table  text-center table table-bordered">
        <tr class="head-tr">
        <td>Slider Cover ID</td>
        <td>Slider Cover Images</td>
        <td>CTA Button</td>
        <td>Control</td>
        
        </tr>
        
        <tr>
        <td></td>
        <td></td>
        <td></td> 
        
        <td>
            <a href="editSlide.html">
            <button class="btn btn-primary" style="width: 150px;">Edit</button>
        </a>
        </td>
        
        </tr>
        
        
        </table>    
    </div>
    <hr>
    </div>
</div>
<!--end home page-->

<!--sumery of service-->

<div class="sum_serv"  style="background-image: url(image/admin_panel.jpg);background-repeat: no-repeat;">
    <div class="container">
        <h1>Summery Of About</h1>


        <div class="se">
            <form>
                <div class="form-group">
               
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group">
              
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="type your text">
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
              </form>
              <div class="table-responsive">
                <table class="main-table  text-center table table-bordered">
                <tr class="head-tr">
                <td>Summery About ID</td>
                <td>Summery About Images</td>
                <td>Summery About</td>
                <td>Control</td>
                
                </tr>
                
                <tr>
                <td></td>
                <td></td>
                <td></td> 
                
                <td>
                    
                    <button class="btn btn-danger" style="width: 150px;">Delete</button>
                
                </td>
                
                </tr>
                
                
                </table>    
            </div>
        </div>
        <hr style="width: 96%;margin-left: 13%;">
    </div>
    
</div>

<!--./sumery of service-->

<!--summery of about-->
<div class="sum_serv">
    <div class="container">
        <h1>Summery Of Services</h1>
        <div class="se">
            
            <form>
                <div class="form-group">
               
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group">
              
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="type your text">
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
              </form>
              <div class="table-responsive">
                <table class="main-table  text-center table table-bordered">
                <tr class="head-tr">
                <td>Summery ID</td>
                <td>Summery Images</td>
                <td>Summery Text</td>
                <td>Control</td>
                
                </tr>
                
                <tr>
                <td></td>
                <td></td>
                <td></td> 
                
                <td>
                   
                    <button class="btn btn-danger" style="width: 150px;">Delete</button>
               
                </td>
                
                </tr>
                
                
                </table>    
            </div>
        </div>
        
        <hr style="width: 96%;margin-left: 13%;">
    </div>
    
</div>


<!--,/summery of about-->

<!--our work-->
<div class="impor">
    <div class="container">
        <h1>Our Work</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
            <td>Our Work ID</td>
            <td>Our Work Images</td>
            <td>Our work Name</td>
            <td>Our Work Information</td>
            <td>Control</td>
            
            </tr>
            
            <tr>
            <td></td>
            <td></td>
            <td></td> 
            <td></td> 
            <td>
                <a href="#">
                <button class="btn btn-danger" style="width: 150px;">Delete</button>
            </a>
            </td>
            
            </tr>
            
            
            </table> 
            <a href="newOurWork.html" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New Our Work</i></button>
            </a>   
        </div> 
        <hr>
    </div>
</div>
<!--./our work-->
<!--important client-->
<div class="ourWork">
    <div class="container">
        <h1>Important Client</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
            <td>Client ID</td>
            <td>Client Images</td>
            <td>Client Name</td>
            <td>Client Information</td>
            <td>Control</td>
            
            </tr>
            
            <tr>
            <td></td>
            <td></td>
            <td></td> 
            <td></td> 
            <td>
                <a href="#">
                <button class="btn btn-danger" style="width: 150px;">Delete</button>
            </a>
            </td>
            
            </tr>
            
            
            </table> 
            <a href="newImportantClient.html" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New Important Client</i></button>
            </a>   
        </div> 
        <hr>
    </div>
</div>
    </div>
</div>
<!--important client-->
    <!--script-->
    <script src="{{asset('frontEnd')}}/js/jquery-3.1.0.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
    <!--./script-->
</body>
</html>