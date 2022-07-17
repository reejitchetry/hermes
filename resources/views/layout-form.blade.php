<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>@yield('tittle')</title>

    <link rel="shortcut icon" type="image" href="{{secure_asset('pic/hermeslogo.png.png')}}">
    <script src="{{secure_asset('Javascript/jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/font.css')}}">
<link href="{{secure_asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  @section("csslink")
        @show

</head>
<body>



<div class="container">
  
<div class="d-flex justify-content-center align-items-center vh-100">
    <div>
@section("errors")
@show
<div class="bordered card ">
<div style="padding: 40px 40px 40px 40px;">
@section("main")
@show
</div>
</div>
</div>
</div>
</div>

   
 @section("script")
  @show

  
</body>
</html>