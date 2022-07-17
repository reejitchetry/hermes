@extends('layout-form')
@section("tittle","HERMES")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{secure_asset('\css/signup.css')}}">
@endsection

@section("errors")
@if($errors->any())
<div class="alert alert-danger">Missing credentials</div>
@endif

 @if(session('failure'))
 <div class="alert alert-danger"> Username or email is already taken </div>
   
@endif
@if(session('success'))
 <div class="alert alert-success">Account Made Succesfully </div>

@endif
@endsection

 @section("main")
  
 <image src="{{secure_asset('\pic/hermeslogo.png.png')}}" style="height:50px; width:50px; padding:5px;">

<h2>SIGN UP</h2>
  <form  method="post" action="signupform">
      {{@csrf_field()}}
     
<div class="mb-4">
<div class="row g-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="Username" name="Username" id="validationDefault01">
  </div>
</div>
</div>

 <div class="mb-4">
<div class="row g-2">
  <div class="col">
      <input type="email" class="form-control" placeholder="Email" name="email" id="validationDefaultUsername">
  </div>
</div>
</div>

  <div class="mb-3">
  <input type="Password" placeholder="Create Password"  oninput="myFunction()" class="form-control" name="password" id="validationDefault07" >
  <h7 class="text-danger text-center">@error('password')
    @if($message=="The password must be at least 8 characters.")
       &#9432;&nbsp;{{$message}}
    @endif
  @enderror</h7>

    <div id="check"> <div id="mychart3_status">
       <div id="mychart3_bar"></div>
         </div></div>

  </div>
 <div class="mb-3">
    <button class="btn btn-primary" onclick="PosEnd(validationDefault07);" type="submit" name="submit"><h6>SUBMIT</h6></button>
  </div>
</form>
<br>
   <h6>ALREADY HAVE ACCOUNT? <a rel="canonical" href="login">LOGIN</a></h6>


 @endsection

 @section("script")
  <script src="{{secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('Javascript/signup.js')}}"></script>
<script>

function myFunction()
{
var x=$('input[type="password"]').val().length;

if(x>=1)
$("#check").show();  
else
{
$("#check").hide();  
$("#mychart3_bar").css("backgroundColor","red");
    $("#mychart3_bar").animate({
      width:"5%"},2000); 
}
switch (x) {
  case 3:
    $("#mychart3_bar").css("backgroundColor","red");
    $("#mychart3_bar").animate({
      width:"15%"},2000); 
    break;
  case 5: 
    $("#mychart3_bar").css("backgroundColor","yellow");
    $("#mychart3_bar").animate({
      width:"30%"},2000); 
    break;
  case 7:
    $("#mychart3_bar").css("backgroundColor","yellow");
    $("#mychart3_bar").animate({
      width:"60%"},2000);   
    break;
  case 8:
    $("#mychart3_bar").css("backgroundColor","green");
    $("#mychart3_bar").animate({
      width:"80%"},2000);   
    break;

  case 10:
    $("#mychart3_bar").css("backgroundColor","green");
    $("#mychart3_bar").animate({
      width:"100%"},2000);  
    break;

}

  


} 
 

</script>

@endsection