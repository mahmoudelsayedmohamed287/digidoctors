@extends('admin.nav')
@section('content')

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All digi core</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
            
            <td>core title</td>
            <td>core description</td>
            <td>core image</td>
            <td>Control</td>
            
            </tr>
            @foreach($missions as $mission)
            
            <td>{{$mission->title}}</td>
            <td><img src="{{asset($mission->image)}}" alt="" width=" 100px" height =" 100px"></td>
            <td>{{$mission->description}}</td>
            
            <td>
                <a href="{{asset('editcore')}}/{{$mission->id}}">
                <button class="btn btn-success" style="width: 150px;">Edit</button>
                </a>
               
            </td>

            
            </tr>
            @endforeach
            
            
            </table> 
             
        
    </div>
</div>
    
@endsection