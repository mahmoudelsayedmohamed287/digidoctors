@extends('admin.nav')
@section('content')
<div class = "container">
<h1 class = "text-center"> Add  new service</h1>
<!--edit sslide-->
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">Add New Services</h1>
        <form id="formAddAdderss" action="{{ asset('addservice')}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
            <div class="form-group">
           <label>New Service Image</label>
              <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1">
            
            </div>
            <div class="form-group">
          <label>Service Name</label>
              <input type="text" name = "name" class="form-control" id="exampleInputPassword1" placeholder="service name">
            </div>
            <div class="form-group">
                <label>Service Description</label>
                <input type="text" name = "description" class="form-control" id="exampleInputPassword1" placeholder="service description">
              </div>
              <div class="form-group">
                <label>Service Price</label>
                <input type="number" name = "price" class="form-control" id="exampleInputPassword1" placeholder="service price">
              </div>
             
             
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>

<!--./ edit slide-->
@endsection


