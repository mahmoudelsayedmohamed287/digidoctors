@extends('admin.nav')
@section('content'))

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All works</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
                        
                        
                        <th>name</th>
                        <th>information</th>
                        <th>image</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($works as $work)
                    <tr>
                        
                        <td>{{$work->name}}</td>
                        <td>{{$work->information}}</td>
                        <td><img src="{{asset($work->image)}}" alt="" width=" 100px" height =" 100px"></td>
                        
                      
                       
                        <td>
                        
                            <a  href="{{asset('editwork')}}/{{$work->id}}" class="btn btn-success">Edit</a>  
                            <a  href="{{asset('deletework')}}/{{$work->id}}" class="btn btn-danger">Delete</a>
                            
                        
                            
                        </td>
                        
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            <a href="{{ asset('creatework')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New  work</i></button>
            </a> 
           

        </div>
    </div>
    
@endsection