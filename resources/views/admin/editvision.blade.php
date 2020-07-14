@extends('admin.nav')
@section('content')
<div class = "container">
<h1 class = "text-center"> edit vision</h1>
<form id="formAddAdderss" action="{{ asset('updatevision')}}/{{$vision->id}}" method="post" enctype="multipart/form-data"> 
{{csrf_field()}}
<div class="container py-5">
    <div class="row">
       

        <div class="col-md-12 col-xs-12">
            <label> vision body *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="body" type="text" class="form-control" value = "{{$vision->body}}">
            </div>
        </div>

       

                <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" >
            <img src="{{asset($vision->image)}}" alt="" width=" 100px" height =" 100px">
            </div>
            </div>
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            update vision 
                </button>
            </div>
        </div>
        </div>
       
        </form>
</div>
@endsection


