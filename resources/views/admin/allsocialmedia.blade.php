@extends('admin.nav')
@section('content')

<div class="ourteam" style="padding-top: 120px;">
    <div class="container">
        <h1>All social media</h1>
        <div class="table-responsive">
            <table class="main-table  text-center table table-bordered">
            <tr class="head-tr">
            
            <td>facebook</td>
            <td>twitter</td>
            <td>instgram</td>
            <td>whatsapp</td>
            <td>linkedin</td>
            <td>Control</td>
            
            </tr>
            @foreach($media as $medi)
            
            <td>{{$medi->facebook}}</td>
            <td>{{$medi->twitter}}</td>
            <td>{{$medi->instgram}}</td>
            <td>{{$medi->whatsapp}}</td>
            <td>{{$medi->linkedin}}</td>
            
            
            <td>
                <a href="{{asset('editmedia')}}/{{$medi->id}}">
                <button class="btn btn-success" style="width: 150px;">Edit</button>
                </a>
              
            </td>

            
            </tr>
            @endforeach
            
            
            </table> 
            <a href="{{ asset('createmedia')}}" style="float: left;">
                <button class="btn btn-primary"><i class="fa fa-plus"> New  social media</i></button>
            </a>   
        </div> 
        <hr>
    </div>
</div>
    
@endsection