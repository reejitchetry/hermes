
@extends('layout-navbar-T1')

@section("tittle","Dashboard-$username")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/dsb.css')}}">

@endsection
@section("Navcustomize")
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
@endsection

@section("navbartittle","Dashboard")
@section("navlink1","Profile")
@section("navlink2","Change Password")
@section("navlink3","Logout")
@section("Navlink1","profile")
@section("Navlink2","changepassword")
@section("Navlink3","logout")




 @section("main")


<div id="dashboard" class="container-fluid" style="position:relative; top:15px;">
 <div id="myDiv" class="container">
    <img id="main" src ="{{secure_asset('\pic/cross.png')}}" align="right" style="position:relative; top:5%; right:2%; height:40px; width:40px; display:inline;">

            <div class="container-fluid content-section text-white text-center" id="services">
                <div class="content-section-heading">
                    <h3 class="gstyle">HERMES</h3>
                </div>
            </div>
      
     
            <div class="container text-center" id="last">
                <h4 class="mx-auto">
                  {{$comments1}}<em>{{$comments2}}</em><br>{{$comments3}}
                </h4><br>
                <img id="main" src ="{{secure_asset('\pic/hermeslogo.png.png')}}" style="position:relative; top:5%; right:2%; height:70px; width:70px; display:inline;">
            </div>
                 
        
 </div>

  

      <div class="row d-flex flex-column " id="x1">
  <div class="col-9 col-md-4 team">
  <div class="drop mb-3"> 
    <div class="content">
             <h3>Create Room</h3>
                <p>With hermes now you can create rooms and chat with your friends . 
                  Hermes has introduced a unique feature to value your privacy.
                  Hermes allows you to set your own encryption key </p>
                
                <a href="{{secure_asset('/chatroom')}}"  class="red">START</a></div>
            </div>
            </div>



</div>


</div>


 @endsection



 @section("script")
 <script src="{{secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src='{{secure_asset("\Javascript/cookie.js")}}'></script>
<script>



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




    $(document).ready(function () {
        $(".dropdown-toggle").dropdown();
       
    });


 
 
 
     
   
    
    var myCookie ={{$see}};
    var temp=1;

if(myCookie==1)
{
     $("#myDiv").show();
     
      $("#main").click(function()
       {
           $("#myDiv").hide();
           $("#x1").attr('style', 'display:block !important');
           
       }); 
      var temp=1;
}
else
{
     $("#x1").attr('style', 'display:block !important');
        temp=0;
}
if(temp==1)
{
// Some random colors
const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 50;
const balls = [];

if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  const numBalls = 40;
 for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 80)}%`;
  ball.style.top = `${Math.floor(Math.random() * 80)}%`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  balls.push(ball);
  document.body.append(ball);
}
// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -3 : 3),
    y: Math.random() * 4
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});

}
else
{
for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 90)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 80)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
  
  
  
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -8 : 8),
    y: Math.random() * 10
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});



}




}

</script>
@endsection



