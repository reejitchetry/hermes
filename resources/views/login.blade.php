@extends('layout-form')
@section("tittle","HERMES")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/login.css')}}">
@endsection

@section("errors")
@if($errors->any())
<div class="alert alert-danger">Fill all fields</div>
@endif

@if(session('wrong'))
   <div class="alert alert-danger">{{session('wrong')}}</div>
@endif  
@endsection
 @section("main")
 <image src="{{secure_asset('\pic/hermeslogo.png.png')}}" style="height:50px; width:50px; padding:5px;">

    <form method="post" action="loginform">
    {{@csrf_field()}} 
    <h2>&nbsp;LOG IN</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" ></label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" ></label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1"  placeholder="Password">
    @if(session('wrong'))    
    <a rel="canonical" href="forget" ><h6 class="text-danger"> &#9432;&nbsp;Forgotten password?</h6></a>
    @endif
  </div>
    <button type="submit" class="btn btn-primary" name="submit"><h6>SUBMIT</h6></button>
  </form>
  <br>
  <h6>&nbsp;DON'T HAVE ACCOUNT? <a rel="canonical" href="signup">SIGN UP</a> </h6>

 @endsection

 @section("script")
 @if(session('wrong'))
 <script> 
  $("#exampleInputEmail1").css("border","2px solid #f8d7da"); 
   $("#exampleInputPassword1").css("border","2px solid #f8d7da");
 
 </script>
 @endif
 <script src="{{secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>
@endsection