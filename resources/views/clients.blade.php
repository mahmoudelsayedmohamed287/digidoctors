@extends('nav')
@section('content')
<!-- home -->
<div class="serv-home">
        <div class="overlay">
            <div class="home-content">
                <h1 class=" wow fadeInDown " data-wow-duration="0.8s">Our Works</h1>
                <h2 class=" wow fadeInLeft " data-wow-duration="0.8s" data-wow-delay="0.4s">see our last work for out
                    great clients</h2>


            </div> <!-- ./home content -->
        </div> <!-- ./overlay -->
    </div> <!-- ./home -->

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
    @endsection