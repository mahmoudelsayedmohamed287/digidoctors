@extends('admin.nav')
@section('content')
<!--edit sslide-->
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">Edit contact</h1>
        <form id="formAddAdderss" action="{{ asset('updatecontact')}}/{{$contact->id}}" method="post" enctype="multipart/form-data"> 
         {{csrf_field()}}
            
            <div class="form-group">
          
              <input type="text" name = "email" class="form-control" id="exampleInputPassword1" value = "{{$contact->email}}">
            </div>
            <div class="form-group">
          
              <input type="text" name = "message" class="form-control" id="exampleInputPassword1"  value = "{{$contact->message}}">
            </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>
@endsection


