@extends('admin.nav')
@section('content')
<div class = "container">
<h1 class = "text-center"> edit about</h1>
<form id="formAddAdderss" action="{{ asset('updateabout')}}/{{$about->id}}" method="post" enctype="multipart/form-data"> 
{{csrf_field()}}
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>story *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="story" type="text" class="form-control"  value = "{{$about->story}}">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label> why_us *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="why_us" type="text" class="form-control" value = "{{$about->why_us}}">
            </div>
        </div>


                <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" >
            <img src="{{asset($about->image)}}" alt="" width=" 100px" height =" 100px">
            </div>
            </div>
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            update about 
                </button>
            </div>
        </div>
        </div>
       
        </form>
</div>
@endsection


