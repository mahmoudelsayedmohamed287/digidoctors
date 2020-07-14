@extends('nav')
@section('content')
 <!-- home -->
 <div class="serv-home">
        <div class="overlay">
            <div class="row">
                <div class="home-content col-md-12">
                    <h1 class=" wow fadeInDown " data-wow-duration="0.8s">Our Works</h1>
                    <h2 class=" wow fadeInLeft " data-wow-duration="0.8s" data-wow-delay="0.4s">see our last work for
                        out great clients</h2>


                </div> <!-- ./home content -->
            </div>
        </div> <!-- ./overlay -->
    </div> <!-- ./home -->

    <!-- ************************************ -->
  <!-- Samples -->
  <div class="samples">
        <div class="container">
            <h3 class="h3-style">Samples Of Our Work</h3>
            <div class="row">
            @foreach($data['works'] as $work)
                <div class="col-md-4 wow zoomIn " data-wow-delay="0.3s" data-wow-duration="0.8s">
                <img src="{{asset($work->image)}}" alt="">   
                 <p>{{$work->name}}</p>
                </div>
                @endforeach
            </div> <!-- ./row -->
            <a  href="{{asset('work')}}" class="btn btn-success">our work</a>  
        </div>
    </div> <!-- ./samples -->

  
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