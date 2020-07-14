<!DOCTYPE html>
<html>
<head>
    <!--css-->
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
<link rel="styleSheet" href="{{asset('frontEnd')}}/css/style.css">
<!--./css-->
</head>
<body  style="background-image: url('{{asset('frontEnd')}}/image/admin_panel.jpg')">
<!--login-->
<div class="admin-login">
    <div class="container">
        <h1>Admin Login</h1>
        <hr>
        <form id="formAddAdderss" action="{{ asset('addadmin')}}" method="post" enctype="multipart/form-data"> 
         {{csrf_field()}}
        <div class="form-group">
        <input type="email" name = "email" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" name = "password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="submit" value="Login" style="width: 30%;float: left;overflow: hidden;background-color: #ffffff;text-align: center;font-size: 20px;font-family: 'Courier New', Courier, monospace;color: #000000;"> 
            </div>
            </form>

    </div>

</div>
</body>     
    </html>