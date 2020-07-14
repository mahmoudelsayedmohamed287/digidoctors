@extends('admin.nav')
@section('content'))

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All services</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
                        
                        
                        <th>name</th>
                        <th>description</th>
                        <th>image</th>
                        <th>price</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($services as $service)
                    <tr>
                        
                        <td>{{$service->name}}</td>
                        <td>{{$service->description}}</td>
                        <td><img src="{{asset($service->image)}}" alt="" width=" 100px" height =" 100px"></td>
                        <td>{{$service->price}}</td>
                      
                       
                        <td>
                        
                            <a  href="{{asset('deleteservice')}}/{{$service->id}}" class="btn btn-danger">Delete</a>
                            
                        
                            
                        </td>
                        
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            <a href="{{ asset('createservice')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New  service</i></button>
            </a>  
           

        </div>
    </div>
    
@endsection