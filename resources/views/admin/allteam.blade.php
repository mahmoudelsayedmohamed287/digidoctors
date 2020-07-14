@extends('admin.nav')
@section('content')

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All team</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
            
            <td>team Images</td>
            <td>team Name</td>
            <td>team description</td>
            <td>team media</td>
            <td>Control</td>
            
            </tr>
            @foreach($teams as $team)
            <td><img src="{{asset($team->image)}}" alt="" width=" 100px" height =" 100px"></td>
            <td>{{$team->name}}</td>
            <td>{{$team->description}}</td>
            <td>{{$team->socialmedia}}</td> 
            
            <td>
                <a href="{{asset('editteam')}}/{{$team->id}}">
                <button class="btn btn-success" style="width: 150px;">Edit</button>
                </a>
                <a href="{{asset('deleteteam')}}/{{$team->id}}">
                <button class="btn btn-danger" style="width: 150px;">Delete</button>
            </a>
            </td>

            
            </tr>
            @endforeach
            
            
            </table> 
            <a href="{{ asset('createteam')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New  team</i></button>
            </a>   
        </div> 
        <hr>
    </div>
</div>
    
@endsection