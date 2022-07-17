
@extends('layout-In')

@section("tittle","ChangePassword-$username")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/checkpassword.css')}}">
@endsection

@section("navbartittle","Change Password")
@section("navlink1","Dashboard")
@section("navlink2","Profile")
@section("navlink3","Logout")
@section("Navlink1","dashboard")
@section("Navlink2","profile")
@section("Navlink3","logout")

 @section("main")
<div id="check" class="container">


<div class="container-fluid">
@if($errors->any())
<div class="alert alert-danger">Please enter all required information</div>
@endif

  @if(session('failure'))
  <br>
   <div class="alert alert-danger">{{session('failure')}}</div>

@endif
@if(session('success'))
   <br>
   <div class="alert alert-success">{{session('success')}}</div>

@endif
    <form method="post" action="changepasswordform">
     {{@csrf_field()}}  
   
  <div class="mb-3">
    <br>
    <input type="password"  class="form-control" name="currentpassword" id="exampleInputEmail1" placeholder="Current Password ">
    
  </div>
  <div class="mb-3">
  <br>
  <input type="password" placeholder="Create Password"  class="form-control" name="newpassword" id="validationDefault07" oninput="myFunction()">
  <h6 class="text-danger">@error('newpassword')
    @if($message=="The newpassword must be at least 8 characters.")
       &#9432;&nbsp;{{$message}}
    @endif
  @enderror</h6>
  <br>
  <div id="check1"> <div id="mychart3_status">
       <div id="mychart3_bar"></div>
         </div></div>

  </div>
  <button type="submit" class="btn btn-primary" name="submit"><h6>CHANGE PASSWORD</h6></button>
  </form>
</div>
</div>



 @endsection




 @section("script")
 <script src="{{secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>
 <script>

function myFunction()
{

var x=$('#validationDefault07').val().length;

if(x>=1)
$("#check1").show();  
else
{
$("#check1").hide();  
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



