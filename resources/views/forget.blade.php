<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<script src="{{secure_asset('\Javascript/jquery.js')}}"></script>
	
<title>
	Forget password
</title>
<link rel="shortcut icon" type="image" href="{{secure_asset('\pic/hermeslogo.png.png')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="{{secure_asset('\css/font.css')}}">
<link href="{{secure_asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{secure_asset('\css/forgot.css')}}">

</head>

<body>

   
   	        
   

  <div id="login" class="container-fluid">
  @if($errors->any())
<div class="alert alert-danger">Please enter your email</div>
@endif

   @if(session('wrong'))
   <div class="alert alert-danger">{{session('wrong')}}</div>
    @endif
      @if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>

@endif
<h2>&nbsp;HERMES</h2>
    <form method="post" action="password"> 
          {{@csrf_field()}} 
  <div class="mb-3">
   <br>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter your email">
    
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit"><h6>SUBMIT</h6></button>
    
  </form>
  <br>
    <h6>BACK TO <a rel="canonical" href="home" >HERMES</a></h6>
</div>



 <script src="{{secure_asset('\bootstrap/js/bootstrap.min.js')}}"></script>


</body>

</html>
