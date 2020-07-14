@extends('admin.nav')
@section('content')


<!--start home page-->
<div class="homePage">
    <div class="container">
       <h1>Slider Cover</h1>
       <div class="table-responsive">
        <table class="main-table  text-center table table-bordered">
        <tr class="head-tr">
        <td>Slider Cover Images</td>
        <td>Slider Title</td>
        <td>Slider Sub Title</td>
        <td>CTA Button</td>
        <td>CTA Button Link</td>
        <td>Control</td>
        
        </tr>
        @foreach($data['sliders'] as $slider)
        <tr>
        <td><img src="{{asset($slider->image)}}" alt="" width=" 100px" height =" 100px"></td>

        <td>{{$slider->tittle}}</td>
        <td>{{$slider->subtittle}}</td>
        <td>{{$slider->ctabutton}}</td>
        <td>{{$slider->buttonlink}}</td>
<td>
            <a href="{{ asset('editslider')}}/{{$slider->id}}">
            <button class="btn btn-primary" style="width: 150px;">Edit</button>
        </a>
        </td>
        
        </tr>
        @endforeach
        
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
        <form id="formAddAdderss" action="{{ asset('adminsummery')}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
                <div class="form-group">
               
                  <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group">
              
                  <textarea name = "" style="width: 100%;"></textarea>
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
              </form>
                <table class="main-table  text-center table table-bordered">
                <tr class="head-tr">
               
                <td>Summery About Images</td>
                <td>Summery About</td>
                <td>Control</td>
                
                </tr>
                @foreach($data['abouts'] as $about)
                <tr>
                <td><img src="{{asset($about->image)}}" alt="" width=" 100px" height =" 100px"></td>

                <td>{{$about->text}}</td>
                 
                
                <td>
                    
                <a  href="{{asset('deleteabout')}}/{{$about->id}}" class="btn btn-danger">Delete</a>

                
                </td>
                @endforeach
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
            
  
              <div class="table-responsive">
                <table class="main-table  text-center table table-bordered">
                <tr class="head-tr">
                
                <td>Summery Images</td>
                <td>Summery Text</td>
                <td>Control</td>
                
                </tr>
                @foreach($data['services'] as $service)
                <tr>
               
                <td><img src="{{asset($service->image)}}" alt="" width=" 100px" height =" 100px"></td>

                <td>{{$service->description}}</td>
                
                
                <td>
                   
                <a  href="{{asset('deleteservice')}}/{{$service->id}}" class="btn btn-danger">Delete</a>

               
                </td>
                @endforeach
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
           
            <td>Our Work Images</td>
            <td>Our work Name</td>
            <td>Our Work Information</td>
            <td>Control</td>
            
            </tr>
            @foreach($data['works'] as $work)
            <tr>
            <td><img src="{{asset($work->image)}}" alt="" width=" 100px" height =" 100px"></td>

            <td>{{$work->name}}</td> 
            <td>{{$work->information}}</td> 
            <td>
            <a  href="{{asset('deletework')}}/{{$work->id}}" class="btn btn-danger">Delete</a>

            </a>
            </td>
            @endforeach
            </tr>
            
            
            </table> 
            <a href="{{ asset('creatework')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New  work</i></button>
            </a> >   
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
          
            <td>Client Images</td>
            <td>Client Name</td>
            <td>Control</td>
            
            </tr>
            @foreach($data['importantclient'] as $important)
            <tr>
            <td><img src="{{asset($important->image)}}" alt="" width=" 100px" height =" 100px"></td>
            <td>{{$important->name}}</td> 
             
            <td>
            <a  href="{{asset('deleteimportants')}}/{{$important->id}}" class="btn btn-danger">Delete</a>
                
            </a>
            </td>
            @endforeach
            </tr>
            
            
            </table> 
            <a href="{{ asset('addimportants')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New  client</i></button>
            </a>   
        </div> 
        <hr>
    </div>
</div>
    </div>
</div>
<!--important client-->
@endsection