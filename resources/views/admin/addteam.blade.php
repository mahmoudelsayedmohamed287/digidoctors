@extends('admin.nav')
@section('content')
<div class="editSlide">
    <div class="container">
        <h1 style="text-align: center;color: #ffffff;margin-bottom: 25px;">New Team Member</h1>
        <form id="formAddAdderss" action="{{ asset('addteam')}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
            <div class="form-group">
           <label>Team Member Image</label>
              <input type="file" name = "mainimg" class="form-control" id="exampleInputEmail1">
            
            </div>
            <div class="form-group">
          <label>Team member Name</label>
              <input type="text" name = "name" class="form-control" id="exampleInputPassword1" placeholder="type team member name">
            </div>
            <div class="form-group">
                <label>Team member Description</label>
                <input type="text" name = "description" class="form-control" id="exampleInputPassword1" placeholder="type team member description">
              </div>
              <div class="form-group">
                <label>Facebook Link</label>
                <input type="text" name = "facebook" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label>Twitter Link</label>
                <input type="text" name = "twitter" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label>Instagram Link</label>
                <input type="text" name = "instgram" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label> Whatsapp Number</label>
                <input type="text" name = "whatsapp" class="form-control" id="exampleInputPassword1">
              </div> 
              <div class="form-group">
                <label> Linkid In Link</label>
                <input type="text" name = "linkedin" class="form-control" id="exampleInputPassword1">
              </div>   
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
          </form>
    </div>
</div>

<!--./ edit slide-->
@endsection


