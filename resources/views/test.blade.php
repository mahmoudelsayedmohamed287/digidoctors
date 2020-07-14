@extends('nav')
@section('content')
  <!-- home -->
  <div class="home-about">
        <div class="overlay">
            <div class="home-content">
                <h1>About Digi-doctor</h1>
                @foreach($data['abouts'] as $about)
                <p>{{$about->why_us}}</p>
                @endforeach

            </div> <!-- ./home content -->
        </div> <!-- ./overlay -->
    </div> <!-- ./home -->

    <!-- ************************************ -->
    <div class="vision">
        <div class="container">
            <div class="col-md-6">
                @foreach($data['visions'] as $vision)
                <div class="item">
                    <div class="item-img">
               <img src="{{asset($vision->image)}}" alt="">
                    </div>
                    <div class="info">
                        <h3>Our Vision</h3>
                        <p>{{$vision->body}}</p>
                    </div>

                </div>
                @endforeach
            </div>

            @foreach($data['missions'] as $mission)
            <div class="col-md-6">
                <div class="item">
                    <div class="item-img">
                    <img src="{{asset($mission->image)}}" alt="">
                    </div>
                    <div class="info">
                        <h3>Our Mission</h3>
                        <p><p>{{$mission->body}}</p</p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div> <!-- ./vision -->
 

    <div class="team">
        <div class="container">
            <h3 class="h3-style ">Our Great Team</h3>
            <div class="row">
            @foreach($data['teams'] as $team)
                <div class="col-md-4">
                    <div class="item">
                        <div class="item-img">
                        <img src="{{asset($team->image)}}" alt="">
                            <div class="info">
                                <h3>{{$team->name}}</h3>
                                <p>{{$team->description}}</p>
                               
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-twitter "></i></a>
                                    <a href="#"> <i class="fab fa-linkedin-in "></i></a>
                                    <a href="#"> <i class="fab fa-instagram "></i></a>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> <!-- ./team -->

    <!-- *************************** -->
    <!-- clients -->
    <div class="clients">

        <h3 class="h3-style">Our clients</h3>
        <div class="row">
        @foreach($data['clients'] as $clients)
            <div class="col-md-3">
            <img src="{{asset($clients->image)}}" alt="">
            <p>{{$clients->name}}</p>
            </div>
            @endforeach
        </div> <!-- ./row -->
       
        <a><button class="btn">Our Clients</button></a>
    </div> <!-- ./clients -->

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