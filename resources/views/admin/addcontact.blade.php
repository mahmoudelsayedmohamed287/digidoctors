@extends('admin.nav')
@section('content')
<!--edit sslide-->
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">New contact</h1>
        <form id="formAddAdderss" action="{{ asset('addcontact')}}" method="post" enctype="multipart/form-data"> 
         {{csrf_field()}}
            
            <div class="form-group">
          
              <input type="text" name = "email" class="form-control" id="exampleInputPassword1" placeholder="type email">
            </div>
            <div class="form-group">
          
              <input type="text" name = "message" class="form-control" id="exampleInputPassword1" placeholder="type message">
            </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>
@endsection


