@extends('admin.nav')
@section('content'))

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All contacts</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
                        
                        
                        <th> company email</th>
                        <th>message</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($contacts as $contact)
                    <tr>
                        
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>
                      
                       
                        <td>
                        
                            <a  href="{{asset('editcontact')}}/{{$contact->id}}" class="btn btn-success">Edit</a>  
                            
                        
                            
                        </td>
                        
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
           
           

        </div>
    </div>
    
@endsection