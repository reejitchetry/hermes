
@extends('layout-home')
@section("tittle","HERMES")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/first.css')}}">
@endsection



 @section("main")
  
 
 <div class="container-fluid" id="mainbody">
  
<div class="first">

    <div class="row ">
        <div class ="col-6">
        <p class="add"> HERMES</p>
      </div>
      <div class ="col-6 d-flex justify-content-end">
      <a href="login" style="padding:10px 0px 0px 0px;"><button class="btn btn-primary" style="width:100px;"><h5>Log In</h5></button><a>
      </div>
    </div>

  

  

    <div class="row" style="height:85%;">
    <div class ="col-12 d-flex justify-content-center align-items-center">
      <div >
      <h2 class="text-center">JOIN NOW & START CHATTING </h2>
      <p class="lead text-center"><em>Secure,reliable...</em></p>
      <div class="text-center">
      <a href="signup"><button class="btn btn-primary" style="width:250px;"><h5>Get Started </h5></button><a>
    </diV>
     

    </div>
    </div>
    </div>


</div>


    <div class="row  border pad">
    <div class ="col-md-6  d-flex justify-content-center">

    <div class=" text-center">
    <h2 >PRIVACY</h2>
    <p class="lead"><em>
    All your message are secured with an encryption key chosen by you </em></p>
</div>

</div>
<div class ="col-12  col-md-6 d-flex justify-content-center">
  <img src="{{secure_asset('\pic/privacy.png.png')}}" height="150px" width="150px">
      </div>
    </div>



    <div class="row border pad">

   <div class ="col-12 col-md-6 d-flex justify-content-center">
   <img src="{{secure_asset('\pic/world.png')}}" height="150px" width="150px">
      </div>

      <div class ="col-md-6 d-flex justify-content-center">
      <div class=" text-center">
    <h2 >CREATE ROOM</h2>
    <p class="lead"><em>
    With hermes now you can create rooms and chat with your friends from around the world</em></p>
</div>
</div>

    </div>
    

    <div class="row " style="height:40%;">
    <div class ="col-12 d-flex justify-content-center">
    <div class="d-flex flex-column ">
  <div class="p-2">  <h4>
                    Contact
                    <em>website </em>
                    developer!
                </h4></div>
  <div class="p-2 d-flex justify-content-center"><a  href="mailto:hermesmessenger000@gmail.com"><img src="\pic/Gmail.png" class="call" height="50px" width="50px"></a> 
  <a  href="https://in.linkedin.com/in/reejit-chetry-317685196" style="position:relative; left:10px;"><img src="\pic/linke.png" class="call" height="50px" width="50px"></a>       </div>
   </div>

      </div>
    </div>

  
</div>
   


    <section class="callout1">
            <div class="container-fluid text-center" id="jadu">      
              <image src="{{secure_asset('\pic/hermeslogo.png.png')}}" style="height:50px; width:50px;" id="hermes">
            </div>
        </section>

 @endsection

 @section("script")
 <script src="{{secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('Javascript/index.js')}}"></script>
@endsection