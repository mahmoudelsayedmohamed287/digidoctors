@extends('admin.nav')
@section('content'))

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>Manage posts</h1>
        <div class="button-group">
            <a href="{{asset('createpost')}}" class="btn btn-primary">Add Post</a>
            <a href="{{asset('adminposts')}}" class="btn btn-primary">Manage Posts</a>
        </div>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
                        
                        
                        <th>tittle</th>
                        <th>image</th>
                        <th>information</th>
                        

                        <th>control</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($posts as $post)
                    <tr>
                        
                        <td>{{$post->title}}</td>
                        <td><img src="{{asset($post->image)}}" alt="" width=" 100px" height =" 100px"></td>
                        <td>{{$post->information}}</td>
                     

                      
                       
                        <td>
                        
                            <a  href="{{asset('editpost')}}/{{$post->id}}" class="btn btn-success">Edit</a>  
                            <a  href="{{asset('deletepost')}}/{{$post->id}}" class="btn btn-danger">Delete</a>
                            <?php if($post->status == 1){?>
                            <a  href="publishpost?id={{$post->id}}&stat=1" class="btn btn-primary">published</a>
                           
                            <?php }else{ ?>
                            <a  href="publishpost?id={{$post->id}}&stat=0" class="btn btn-primary">not published</a>
                            
                           <?php }?>
                        
                            
                        </td>
                        
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
           
           

        </div>
    </div>
    
@endsection