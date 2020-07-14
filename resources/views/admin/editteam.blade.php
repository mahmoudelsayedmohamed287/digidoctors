@extends('admin.nav')
@section('content')
<div class = "container">
<h1 class = "text-center"> edit team</h1>
<form id="formAddAdderss" action="{{ asset('updateteam')}}/{{$team->id}}" method="post" enctype="multipart/form-data"> 
{{csrf_field()}}
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>Name *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="name" type="text" class="form-control"  value = "{{$team->name}}">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label> description *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="description" type="text" class="form-control" value = "{{$team->description}}">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label> social media *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="socialmedia" type="text" class="form-control" value = "{{$team->socialmedia}}">
            </div>
        </div>

                <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" >
            <img src="{{asset($team->image)}}" alt="" width=" 100px" height =" 100px">
            </div>
            </div>
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            update team  
                </button>
            </div>
        </div>
        </div>
       
        </form>
</div>
@endsection


