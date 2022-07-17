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

<div id="bar">
@section("Navcustomize")
       @show
  <div class="container-fluid">
  <a class="navbar-brand" rel="canonical" class=".disabled">@yield('navbartittle')</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" rel="canonical" href="@yield('Navlink1')">@yield('navlink1')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="@yield('Navlink2')">@yield('navlink2')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="canonical" href="@yield('Navlink3')">@yield('navlink3')</a>
        </li>        
            @section("navbarlinks")
            @show
      </ul>
      @section("extralink")
       @show
     </div>

</nav>
</div>

<div id="main">
    @section("main")
        @show
     </div>   
        
       
 @section("script")
  @show

  
</body>
</html>