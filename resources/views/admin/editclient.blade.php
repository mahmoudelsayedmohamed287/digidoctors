@extends('admin.nav')
@section('content')
<!--edit sslide-->
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">edit client</h1>
        <form id="formAddAdderss" action="{{ asset('updateclient')}}/{{$client->id}}" method="post" enctype="multipart/form-data"> 
         {{csrf_field()}}
            <div class="form-group">
           
              <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1">
              <img src="{{asset($client->image)}}" alt="" width=" 100px" height =" 100px">

            
            </div>
            <div class="form-group">
          
              <input type="text" name = "name" class="form-control" id="exampleInputPassword1" value = "{{$client->name}}">
            </div>
 
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>
@endsection


