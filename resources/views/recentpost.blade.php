@extends('nav')
@section('content')
<!--view all informatio of post-->
<div class="view-post">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 col-sm-8">
                <img src="{{asset($posts->image)}}" alt="">   
                    <h1>{{$posts->title}}</h1>
                    <p>{{$posts->information}}</p>
                       
                </div>
              
               
                <!--recent post-->
                <h2>Recent Posts</h2>
                @foreach($recent  as $rec)
                <div class="col-lg-4 col-sm-4">
               
                   
                  
                    <div class="col-sm-4">
                    <img src="{{asset($rec->image)}}" alt="">   
                    </div>
                    <div class="col-sm-4">
                        <h5>{{$rec->title}}</h5>
                    </div>
                </div>
     @endforeach
            </div>
        </div>
    </div>



    <div class="contact">
        <div class="container">
            <div class="row">
           
                <div class="col-md-12">
                    <h3 class="h3-style">Contact Us</h3>
                    <p>Just Send Us Mail With your need and we will call you fastest as we can .</p>
                </div>
               

            </div>
            <form id="formAddAdderss" action="{{ asset('addmessage')}}" method="post" enctype="multipart/form-data"> 
             {{csrf_field()}}
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control"name = "name">
                </div>

                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" class="form-control"name = "email">
                </div>

                <div class="form-group">
                    <label class="text-lable">Message:</label>
                    <textarea class="form-control" name = "message"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn ">Send</button>
                </div>

            </form>
        </div>
    </div> <!-- ./contact -->
    @endsection