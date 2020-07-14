@extends('admin.nav')
@section('content')
<div class = "container">
<h1 class = "text-center"> edit work</h1>
<form id="formAddAdderss" action="{{ asset('updatework')}}/{{$work->id}}" method="post" enctype="multipart/form-data"> 
{{csrf_field()}}
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>Name *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="name" type="text" class="form-control"  value = "{{$work->name}}">
            </div>
        </div>


        <div class="col-md-12 col-xs-12">
            <label> information *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="information" type="text" class="form-control" value = "{{$work->information}}">
            </div>
        </div>

                <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" >
            <img src="{{asset($work->image)}}" alt="" width=" 100px" height =" 100px">
            </div>
            </div>
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            update work  
                </button>
            </div>
        </div>
        </div>
       
        </form>
</div>
@endsection


