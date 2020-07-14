@extends('admin.nav')
@section('content')

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All vision</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
            
            <td>vision body</td>
            <td>vision image</td>
            <td>Control</td>
            
            </tr>
            @foreach($visions as $vision)
            <td><img src="{{asset($vision->image)}}" alt="" width=" 100px" height =" 100px"></td>
            <td>{{$vision->body}}</td>
            
            
            <td>
                <a href="{{asset('editvision')}}/{{$vision->id}}">
                <button class="btn btn-success" style="width: 150px;">Edit</button>
                </a>
            
            </td>

            
            </tr>
            @endforeach
            
            
            </table> 
             
        
    </div>
</div>
    
@endsection