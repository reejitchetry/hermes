


var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = "SARATHI", //name of the chatbot
  talking = true; //when false the speach function doesn work
   let msg =[""];
   var temp=0;
   var q=0;
  
//edit this function to change what the chatbot says
function chatbotResponse() {
  talking = true;
  botMessage = "I didnt get what you said"; //the default message
  

 
   botMessage="Currently I am out of service ";


     let _token =$('meta[name="csrf-token"]').attr('content');
   
  

      //love sync
   $.ajax({
       url:'/bot1',
       async:false,
       type:'post',
        data:{ question: lastUserMessage , answer: botMessage ,_token:_token} ,
         dataType:'json',
        success: function (data,status) {
           
           $.each( data ,function(index,data){

                 botMessage=""+data;
                 
           });
          
           
        },

   })

         msg.push(lastUserMessage);
  
}
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//
//
//
//this runs each time enter is pressed.
//It controls the overall input and output
var times=0;

function newEntry() {
  //if the message from the user isnt empty then run 
  if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
     var str="YOU :";
    messages.push("<strong>" + str.fontcolor("white") + "</strong> "+lastUserMessage.fontcolor( "white" ));
    //Speech(lastUserMessage);  //says what the user typed outloud
    //sets the variable botMessage in response to lastUserMessage
    chatbotResponse();
  var str1=botName+" :";
    //add the chatbots name and message to the array messages
    messages.push("<strong>" + str1.fontcolor("white") + "</strong> " +botMessage.fontcolor("white"));
    // says the message using the text to speech function written below
    if(botMessage!=">>>DEVELOPED BY @infopythonCodes<<<")
    {
    Speech(botMessage);
    }
      times=times+2;
    //outputs the last few array elements of messages to html
    for (var i = 1; i < 11; i++) {
      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
      
       
    }
    //colors
     for(var t=times;t>0;t--)
              {
                  
                  if(t%2==0){
               document.getElementById("chatlog" + t).style.backgroundColor = "black";
                 document.getElementById("chatlog" + t).style.padding= "5px";
                document.getElementById("chatlog" + t).style.borderRadius = "2px";
                document.getElementById("chatlog" + t).style.borderColor ="white";
                document.getElementById("chatlog" + t).style.boxShadow = "0 5px 15px rgba(0,0,0,0.2)";
             
                  }
               else
               {
               document.getElementById("chatlog" + t).style.backgroundColor = "#3AAFA9";
                 document.getElementById("chatlog" + t).style.padding= "5px";
                document.getElementById("chatlog" + t).style.borderRadius = "2px";
                document.getElementById("chatlog" + t).style.borderColor ="white";
                document.getElementById("chatlog" + t).style.boxShadow = "0 5px 15px rgba(0,0,0,0.2)";
               }
               
              
                   
               }
  
  }
}


//text to Speech
//https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
function Speech(say) {
  if ("speechSynthesis" in window && talking) {
    var utterance = new SpeechSynthesisUtterance(say);
    //msg.voice = voices[10]; // Note: some voices dont support altering params
    //msg.voiceURI = "native";
    //utterance.volume = 1; // 0 to 1
    //utterance.rate = 0.1; // 0.1 to 10
    //utterance.pitch = 1; //0 to 2
    //utterance.text = "Hello World";
    //utterance.lang = "en-US";
    speechSynthesis.speak(utterance);
  }
}

var z=0;
//runs the keypress() function when a key is pressed
document.onkeypress = keyPress;
//if the key pressed is "enter" runs the function newEntry()
function keyPress(e) {
  var x = e || window.event;
  var key = (x.keyCode || x.which);
  if (key == 13 || key == 3) {
    //runs this function when enter is pressed
    newEntry();
  }
  z=msg.length; 
}

var z=0;
$(document).keyup(function(e) {
        if (e.which === 38) {
        
         if(msg[z-1]!=undefined)
         {
           document.getElementById("chatbox").value = msg[z-1];
         z=z-1;
         }
        }
        
         if (e.which === 40) {
        
         if(msg[z]!=undefined)
         {
           document.getElementById("chatbox").value = msg[z];
         z=z+1;
         }
        }
        
    });


 $(".send").click(function(){
     
      newEntry();
     z=msg.length; 
 });
 var numberoftimes=1;
//clears the placeholder text icon the chatbox
//this function is set to run when the users brings focus to the chatbox, by clicking on it
function placeHolder() {
  document.getElementById("chatbox").placeholder = "";
}
$(document).ready(function(){

    $(".chat_on").click(function(){
        $(".Layout").toggle();
        $(".chat_on").hide();
        if(numberoftimes==1)
        {
          INTRO(1);
          INTRO(2);
          numberoftimes=0;
        }
        document.getElementById("chatbox").select();
    });
    
       $(".divX").click(function(){
        $(".Layout").hide();
          $(".chat_on").show(300);
           temp=0;
            
    });
    
    
});







  function INTRO(input) {
   
      //pulls the value from the chatbox ands sets it to lastUserMessage
      if(input==1)
      botMessage="Hey , Are you in trouble ?";
       if(input==2)
       botMessage="Drop a hi and I am there to help";
    var str1=botName+" :";
      messages.push("<strong>" + str1.fontcolor("white") + "</strong> " +botMessage.fontcolor("white"));
      Speech(botMessage);
      //outputs the last few array elements of messages to html
      for (var i = 1; i < 11; i++) {
        if (messages[messages.length - i])
        {
          document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
          document.getElementById("chatlog" + i).style.backgroundColor = "#3AAFA9";
                   document.getElementById("chatlog" + i).style.padding= "5px";
                  document.getElementById("chatlog" + i).style.borderRadius = "2px";
                  document.getElementById("chatlog" + i).style.borderColor ="white";
                  document.getElementById("chatlog" + i).style.boxShadow = "0 5px 15px rgba(0,0,0,0.2)";
        }
      }
      //colors
      
          if(input==2)
       messages = [];  
                 
                
    

  }