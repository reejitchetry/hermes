<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{csrf_token()}}">
  <link rel="shortcut icon" type="image" href="{{secure_asset('pic/hermeslogo.png.png')}}">
  	<script src="{{secure_asset('Javascript/jquery.js')}}"></script>
    <link href="{{secure_asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/chatbot.css')}}">

</head>

<body>
<div class="container">
	<div class="row">
	 <div id="Smallchat">
    <div class="Layout Layout-open Layout-expand Layout-right sizo" style="background-color: #3AAFA9 ;color: rgb(255, 255, 255);opacity: 5;border-radius: 10px; z-index:1000">
      <div class="Messenger_messenger">
        <div class="Messenger_header" style="background-color:#3AAFA9; color:white;">
          <h4 class="Messenger_prompt">SARATHI</h4>
           <img src ="{{secure_asset('\pic/bot.png')}}"  height="50px" width="60px" style="display:inline;">
          <img src="{{secure_asset('\pic/cross1.png')}}" class="divX" height="30px" width="30px" style="display:inline; align:right; "></div>
        <div class="Messenger_content" id="bodybox container">
  <div id="chatborder" style="overflow-y: scroll; height:380px;">
    

 
    <p id="chatlog10" class="chatlog"></p>
    <p id="chatlog9" class="chatlog"></p>
    <p id="chatlog8" class="chatlog"></p>
    <p id="chatlog7" class="chatlog"></p>
    <p id="chatlog6" class="chatlog"></p>
    <p id="chatlog5" class="chatlog"></p>
    <p id="chatlog4" class="chatlog"></p>
    <p id="chatlog3" class="chatlog"></p>
    <p id="chatlog2" class="chatlog"></p>
    <p id="chatlog1" class="chatlog"></p>

          </div>
            <div class="Input Input-blank">
           <input class="Input_field" type="text" name="chat" id="chatbox" placeholder="TYPE A MESSAGE">
              <img align="right" class="send" src ="{{secure_asset('pic/so.png')}}" height="40px" width="40px" style="display:inline; z-index:1000;">
          </div>
        </div>
      </div>
    </div>
    <!--===============CHAT ON BUTTON STRART===============-->
                
                 <img align="right" src ="{{secure_asset('pic/bot.png')}}"  class="chat_on" height="50px" width="60px" style="display:inline; ">
    <!--===============CHAT ON BUTTON END===============-->
  </div>
	</div>
</div>

 </div>
 
<script src="{{secure_asset('Javascript/chatbot.js')}}"></script>

</body>
</html>
