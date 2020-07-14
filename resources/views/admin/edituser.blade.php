@extends('admin.nav')
@section('content')
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">Edit Admin Profile</h1>
        @foreach($data as $dat)
        <form id="formAddAdderss" action="{{ asset('updateuser')}}/{{$dat->id}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
            <div class="form-group">
           
              <input type="file" name = "mainimg"class="form-control" id="exampleInputEmail1">
              <img src="{{asset($dat->image)}}" alt="" width=" 100px" height =" 100px">

            
            </div>
            <div class="form-group">
          
              <input type="text" name = "name" class="form-control" id="exampleInputPassword1" value = "{{$dat->name}}">
            </div>
            <div class="form-group">
     
                <input type="email" name = "email" class="form-control" id="exampleInputPassword1" value = "{{$dat->email}}">
              </div>
              <div class="form-group">
     
                <input type="password" name = "password" class="form-control" id="exampleInputPassword1" value = "{{$dat->password}}">
              </div>
              @endforeach()
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>
@endsection