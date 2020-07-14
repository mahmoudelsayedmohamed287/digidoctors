@extends('admin.nav')
@section('content')
<!--edit sslide-->
<div class="editSlide">
    <div class="container">
      <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">Edit Slide Cover</h1>
      <form id="formAddAdderss" action="{{ asset('updateslider')}}/{{$sliders->id}}" method="post" enctype="multipart/form-data"> 
          {{csrf_field()}}
            <div class="form-group">
           
              <input type="file"  name = "mainimg" class="form-control" id="exampleInputFile">
              <img src="{{asset($sliders->image)}}" alt="" width=" 100px" height =" 100px">

            
            </div>
            <div class="form-group">
          
              <input type="text"  name = "tittle" class="form-control" id="exampleInputText" placeholder="type text title"value = "{{$sliders->tittle}}">
            </div>
            <div class="form-group">
     
              <input type="text" name = "subtittle"  class="form-control" id="exampleInputText" placeholder="type text sub title"value = "{{$sliders->subtittle}}">
            </div>
            <div class="form-group">
     
              <input type="text" name = "ctabutton"  class="form-control" id="exampleInputText" placeholder="type button name"value = "{{$sliders->ctabutton}}">
            </div>
            <div class="form-group">
     
                <input type="text" name = "buttonlink" class="form-control" id="exampleInputText" placeholder="type button link"value = "{{$sliders->buttonlink}}">
              </div>
               
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>
@endsection
<!--./ edit slide-->