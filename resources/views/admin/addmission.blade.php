@extends('admin.nav')
@section('content')
<!--edit sslide-->
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">New digicore</h1>
        <form id="formAddAdderss" action="{{ asset('addcore')}}" method="post" enctype="multipart/form-data"> 
         {{csrf_field()}}
            <div class="form-group">
           
              <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1">
            
            </div>
            <div class="form-group">
          
              <input type="text" name = "title" class="form-control" id="exampleInputPassword1" placeholder="type Core title">
            </div>

            <div class="form-group">
          
          <input type="text" name = "description" class="form-control" id="exampleInputPassword1" placeholder="type Core description">
        </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>
@endsection