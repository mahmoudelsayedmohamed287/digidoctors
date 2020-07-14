@extends('nav')
@section('content')


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