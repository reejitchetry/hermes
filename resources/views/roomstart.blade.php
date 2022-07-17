
@extends('layout-form')

@section("tittle","Room-$username")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/roomstart.css')}}">
@endsection



       
      
           
@section("errors")
            @if($errors->any())
<div class="alert alert-danger">Please enter all required information</div>
@endif
            @if(session('wrong'))
   <div class="alert alert-danger">{{session('wrong')}}</div>
      @endif
      @endsection


       @section("main")
       <image src="{{secure_asset('\pic/hermeslogo.png.png')}}" style="height:50px; width:50px; padding:5px;">
            <h3 >CHATROOM</h3>
            <form method="post" action="roomcheck" id="roomd"> 
            {{@csrf_field()}} 
 
 <div class="mb-3">
 <label for="exampleInputEmailx" class="form-label" ><span class="gstyle1"> </span></label>
   <input type="text" class="form-control" name="roomname" id="exampleInputPassword1" placeholder="Roomname">
    </div>
     <div class="mb-3">
     <label for="exampleInputEmailx" class="form-label" ><span class="gstyle1"></span></label>
   <input type="text" class="form-control" name="key" id="exampleInputEmailx" oninput="myFunction()" placeholder="Encryption Key">
   <h6 class="text-danger">@error('key')
    @if($message=="The key must be at least 5 characters.")
       &#9432;&nbsp;{{$message}}
    @endif
  @enderror</h6>
   <div id="check1"> <div id="mychart3_status">
       <div id="mychart3_bar"></div>
         </div></div>
   <br>
 <button type="submit" class="btn btn-primary" onclick="PosEnd(exampleInputEmailx);" name="submit"><h6>ENTER</h6></button>
 </div>
 <br>
 </form>   
 <a href="dashboard" style="text-align:center"><h6>BACK TO DASHBOARD</h6></a>
  



 @endsection



 @section("script")
 <script src="{{secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>

<script>

function myFunction()
{

var x=$('#exampleInputEmailx').val().length;

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
  case 2:
    $("#mychart3_bar").css("backgroundColor","red");
    $("#mychart3_bar").animate({
      width:"15%"},2000); 
    break;
  case 3: 
    $("#mychart3_bar").css("backgroundColor","yellow");
    $("#mychart3_bar").animate({
      width:"30%"},2000); 
    break;
  case 4:
    $("#mychart3_bar").css("backgroundColor","yellow");
    $("#mychart3_bar").animate({
      width:"60%"},2000);   
    break;
  case 8:
    $("#mychart3_bar").css("backgroundColor","green");
    $("#mychart3_bar").animate({
      width:"100%"},2000);   
    break;

  case 5:
    $("#mychart3_bar").css("backgroundColor","green");
    $("#mychart3_bar").animate({
      width:"80%"},2000);  
    break;

}


} 



 $(document).ready(function () {
    $(".red").fadeIn(2000);
    });



   function PosEnd(end) {
            var len = end.value.length;
              
            // Mostly for Web Browsers
            if (end.setSelectionRange) {
                end.focus();
                end.setSelectionRange(len, len);
            } else if (end.createTextRange) {
                var t = end.createTextRange();
                t.collapse(true);
                t.moveEnd("character", len);
                t.moveStart("character", len);
                t.select();
            }
        }


</script>
@endsection






   
 