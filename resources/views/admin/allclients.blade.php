@extends('admin.nav')
@section('content'))

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All clients</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
                        
                        
                        <th>name</th>
                        <th>image</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($clients as $client)
                    <tr>
                        
                        <td>{{$client->name}}</td>
                        <td><img src="{{asset($client->image)}}" alt="" width=" 100px" height =" 100px"></td>
                        
                      
                       
                        <td>
                        
                            <a  href="{{asset('editclient')}}/{{$client->id}}" class="btn btn-success">Edit</a>  
                            <a  href="{{asset('deleteclient')}}/{{$client->id}}" class="btn btn-danger">Delete</a>
                            
                        
                            
                        </td>
                        
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            <a href="{{ asset('createclient')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New  client</i></button>
            </a>  
           

        </div>
    </div>
    
@endsection