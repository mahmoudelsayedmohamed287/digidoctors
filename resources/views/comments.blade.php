@extends('nav')
@section('content')
 <!--post section-->
 <section class="post-page">
        <div class="container">
            <h3 class="h3-style">Our Blog</h3>
            <div class="row">
                @foreach($data['posts'] as $post)
                <div class="col-lg-3 col-sm-6">
                    <div class="blog">
                    <img src="{{asset($post->image)}}" alt="">   
                        <div class="card-body">
                            <h5 class="post-title">{{$post->title}}</h5>
                            <p class="post-text">{{$post->information}}</p>
                            <a href="{{asset('recentpost')}}/{{$post->id}}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
          @endforeach
            </div>
        </div>
    </section>
    <!--./post section-->
<br>
<br>
   
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

        </div>
    </div> <!-- ./contact -->
    <!-- **************************** -->
    @endsection