@extends('admin.nav')
@section('content')
<!--edit sslide-->
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">New post</h1>
        <form id="formAddAdderss" action="{{ asset('addpost')}}" method="post" enctype="multipart/form-data"> 
         {{csrf_field()}}
            <div class="form-group">
           
              <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1">
            
            </div>
            <div class="form-group">
          
              <input type="text" name = "title" class="form-control" id="exampleInputPassword1" placeholder="type post title">
            </div>
            <div class="form-group">
          
          <textarea  name = "information" class="form-control" id="body" placeholder="type post information"></textarea>
        </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
 <script>
    ClassicEditor.create( document.querySelector("#body"), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>
@endsection


