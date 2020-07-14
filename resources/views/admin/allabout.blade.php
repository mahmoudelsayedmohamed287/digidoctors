@extends('admin.nav')
@section('content'))

<div class="aboutCover">
    <div class="container">
        <h1>Cover Image</h1>
        <div class="se">
        <form id="formAddAdderss" action="{{ asset('addabout')}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
                <div class="form-group">
               
                  <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group">
              
                  <input type="text" name = "text" class="form-control" id="exampleInputPassword1" placeholder="type your text">
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
              </form>
              <div class="table-responsive">
                <table class="main-table  text-center table table-bordered">
                <tr class="head-tr">
               
                <td>About Cover Images</td>
                <td>About Cover Text</td>
                <td>Control</td>
                
                </tr>
                @foreach($data['abouts'] as $about)
                <tr>
               
                
                <td><img src="{{asset($about->image)}}" alt="" width=" 100px" height =" 100px"></td>
               
                
               
                <td>{{$about->text}}</td>
 <td>
                <a  href="{{asset('deleteabout')}}/{{$about->id}}" class="btn btn-danger">Delete</a>
                
                </td>
                
                </tr>
                @endforeach()
                
                </table>    
            </div>
        </div>
        <hr style="width: 96%;margin-left: 13%;">
    </div>
</div>

<!--./Cover image-->

<!--Our Vision-->
<div class="aboutVesion">
    <div class="container">
        <h1>Our Vesion</h1>
        <div class="se">
        <form id="formAddAdderss" action="{{ asset('addvession')}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
                <div class="form-group">
               
                <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group">
              
                  <input type="text" name = "text" class="form-control" id="exampleInputPassword1" placeholder="type your text">
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
              </form>
              <div class="table-responsive">
                <table class="main-table  text-center table table-bordered">
                <tr class="head-tr">
                
                <td>Our Vesion Images</td>
                <td>Our Vesion Text</td>
                <td>Control</td>
                
                </tr>
                @foreach($data['vessions'] as $vession)
                <tr>
               
                
                <td><img src="{{asset($vession->image)}}" alt="" width=" 100px" height =" 100px"></td>
               
                
               
                <td>{{$about->text}}</td>
 <td>
                <a  href="{{asset('deletevession')}}/{{$vession->id}}" class="btn btn-danger">Delete</a>
                
                </td>
                
                </tr>
                @endforeach()
                
                </table>   
            </div>
        </div>
        <hr style="width: 96%;margin-left: 13%;">
    </div>
</div>
<!--./our vesion-->

<!--why us-->
<div class="whyUS">
    <div class="container">
        <h1>Why Us</h1>
        <div class="se">
        <form id="formAddAdderss" action="{{ asset('addwhyus')}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
                <div class="form-group">
               
                <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group">
              
                  <input type="text" name = "text" class="form-control" id="exampleInputPassword1" placeholder="type your text">
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
              </form>
              <div class="table-responsive">
                <table class="main-table  text-center table table-bordered">
                <tr class="head-tr">
               
                <td>Why US Images</td>
                <td>Why US Text</td>
                <td>Control</td>
                
                
                </tr>
                @foreach($data['whyus'] as $why)
                <tr>
               
                
                <td><img src="{{asset($why->image)}}" alt="" width=" 100px" height =" 100px"></td>
               
                
               
                <td>{{$why->text}}</td>
 <td>
                <a  href="{{asset('deletewhyus')}}/{{$why->id}}" class="btn btn-danger">Delete</a>
                
                </td>
                
                </tr>
                @endforeach()
                
                </table>     
            </div>
        </div>
        <hr style="width: 96%;margin-left: 13%;">
    </div>
</div>
<!--./why us-->
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
                <a  href="{{asset('deleteimportant')}}/{{$important->id}}" class="btn btn-danger">Delete</a>
                
                </td>
                
                </tr>
                @endforeach()
                
                </table> 
                <a href="{{asset('addimportant')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New important client</i></button>
            </a>   
        </div> 
        <hr>
    </div>
</div>
    </div>
</div>
<!--important client-->
<!--team member-->
<!--important client-->
<div class="ourWork">
    <div class="container">
        <h1>Team Member</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
          
            <td>team Member Images</td>
            <td>team Member Name</td>
            <td>face Link</td>
            <td>twit Link</td>
            <td>insta Link</td>
            <td>whats Link</td>
            <td>Linked In Link</td>
            <td>team Member description</td>
            <td>Control</td>
            
            </tr>
            @foreach($data['teams'] as $team)
            <tr>
           
            <td><img src="{{asset($important->image)}}" alt="" width=" 100px" height =" 100px"></td>
               
                
               
            <td>{{$team->name}}</td>
            <td>{{$team->facebook}}</td> 
            <td>{{$team->twitter}}</td>
            <td>{{$team->instgram}}</td>
            <td>{{$team->whatsapp}}</td>
            <td>{{$team->linkedin}}</td>
            <td>{{$team->description}}</td>
           
            <td>
                <a href="{{asset('deleteteam')}}/{{$team->id}}">
                <button class="btn btn-danger" style="width: 150px;">Delete</button>
            </a>
            </td>
            
            </tr>
            @endforeach
            
            </table> 
            <a href="{{asset('createteam')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New Team Member</i></button>
            </a>   
        </div> 
        <hr>
    </div>
</div>
    </div>
</div>
<!--important client-->

    
@endsection