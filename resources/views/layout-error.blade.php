<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('tittle')</title>
  <link rel="shortcut icon" type="image" href="{{secure_asset('pic/hermeslogo.png.png')}}">
    <script src="{{secure_asset('Javascript/jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/font.css')}}">
<link href="{{secure_asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{secure_asset('\css/team.css')}}">

</head>
<body style="background-color:#3AAFA9">
    
<div id="bar">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" rel="canonical" class=".disabled">HERMES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" rel="canonical" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="login">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="canonical" href="signup">Sign Up</a>
        </li>
       
      </ul>
     </div>
</nav>
</div>
<script src="\bootstrap/js/bootstrap.min.js"></script>
<div id="one" class="container-fluid">
  <p class="style2">@yield('statement1')</p>
   <p class="style1">@yield('statement2')</p>
  <div>
      <a href="home"><button type="submit" class="btn btn-primary" name="create">GO BACK TO HERMES</button></a>
      </div>
</div>


</body>
</html>