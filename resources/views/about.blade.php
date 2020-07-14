@extends('nav')
@section('content')
    <!-- home -->
    <div class="home-about">
        <div class="overlay">
            <div class="home-content">
                @foreach($data['abouts'] as $about)
                <h1 class=" wow fadeInDown " data-wow-duration="0.8s">About Digi-doctor</h1>
                <p>{{$about->text}}</p>
                    </pclass=" wow fadeInDown " data-wow-duration=" 0.8s">
@endforeach

            </div> <!-- ./home content -->
        </div> <!-- ./overlay -->
    </div> <!-- ./home -->

    <!-- ************************************ -->
    <div class="vision">
        <div class="container">
            <div class="row">


            <div class="col-md-6">
                    <div class="item">
                    @foreach($data['visions'] as $vision)
                        <div class="item-img wow fadeInRight " data-wow-duration="0.8s" data-wow-delay="0.3s">
                           
                            <img src="{{asset($vision->image)}}" alt="">
                        </div>
                        <div class="info">
                            <h3>Our Vissions</h3>
                            <p>{{$vision->text}}</p>
                        </div>
@endforeach

                    </div>
                </div>


                <div class="col-md-6">
                    <div class="item">
                    @foreach($data['missions'] as $mission)
                        <div class="item-img wow fadeInRight " data-wow-duration="0.8s" data-wow-delay="0.3s">
                           
                            <img src="{{asset($mission->image)}}" alt="">
                        </div>
                        <div class="info">
                            <h3>Our Mission</h3>
                            <p>{{$mission->body}}</p>
                        </div>
@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./vision -->
    <!-- Values -->
    <div class="values">
        <h3 class="h3-style">Digi Doctor core values</h3>
        <div class="row">
        @foreach($data['cores'] as $core)
            <div class="col-md-3 wow fadeInDown " data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="val-item">
                    <div class="img">
                    <img src="{{asset($core->image)}}" alt="">

                    </div>
                    <div class="info">
                    <h3>{{$core->title}}</h3>

                    </p>{{$core->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> <!-- ./values --><!-- ./values -->
    <!-- ********************************** -->
    <div class="team">
        <div class="container">
            <h3 class="h3-style ">Our Great Team</h3>
            <div class="row">
            @foreach($data['teams'] as $team)
                <div class="col-md-4 wow fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.5s">
               
                    <div class="item">
                        <div class="item-img">
                        
                        <img src="{{asset($team->image)}}" alt="">  
                          <div class="info">
                                <h3>{{$team->name}}</h3>
                                <h3>{{$team->description}}</h3>
                                <div class="social">
                <a href="{{$team->facebook}}"><img src="{{asset('homepage')}}/images/facebook.svg"></a>
                <a href="{{$team->instgram}}"><img src="{{asset('homepage')}}/images/instagram.svg"></a>
                <a href="{{$team->linkedin}}"><img src="{{asset('homepage')}}/images/linked.svg"></a>
                <a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="{{asset('homepage')}}/images/you.svg"></a>
                <a href="{{$team->whatsapp}}"><img src="{{asset('homepage')}}/images/whats.svg"></a>
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

        </div>
    </div> <!-- ./contact -->
        </div>
    </div> <!-- ./contact -->
@endsection