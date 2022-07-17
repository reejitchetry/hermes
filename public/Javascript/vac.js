

     $(".box2").delay(1000).fadeIn(1000);
     $(".box3").delay(1500).fadeIn(2000);
      $(".box4").delay(1800).fadeIn(2000);
      $(".box5").delay(2300).fadeIn(2000);
      $(".box1").fadeIn(1000);

		$(".box2").hover(function(){
	   
	    $(".box2").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box2").animate({height:"100px", width:"320px"},1000);
	});

	$(".box3").hover(function(){
	   
	    $(".box3").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box3").animate({height:"100px", width:"320px"},1000);
	});

	$(".box4").hover(function(){
	   
	    $(".box4").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box4").animate({height:"100px", width:"320px"},1000);
	});

	$(".box5").hover(function(){
	   
	    $(".box5").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box5").animate({height:"100px", width:"320px"},1000);
	});

		$(".box2").click(function(){
	   
	    $(".box2").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box2").animate({height:"100px", width:"320px"},1000);
	});

	$(".box3").click(function(){
	   
	    $(".box3").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box3").animate({height:"100px", width:"320px"},1000);
	});

	$(".box4").click(function(){
	   
	    $(".box4").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box4").animate({height:"100px", width:"320px"},1000);
	});

	$(".box5").click(function(){
	   
	    $(".box5").animate({height:"110px", width:"352px"},500);
	  
	},function(){
	    
	    $(".box5").animate({height:"100px", width:"320px"},1000);
	});



	$("document").ready(function(){
	   $.ajax({
	      url:"https://api.rootnet.in/covid19-in/stats/latest",
	      type:"GET",
	      success:function(value){
	      $.each(value,function(index,value)
	      {
	     if(index=="data")
	     {
	      $.each(value,function(index,value)
	      {
	     
	     if(index=="regional")
	     $.each(value,function(index,value)
	      {
	     
	      if(index==3){
	              
	        
	           $(".box2").append(value.totalConfirmed);
	     
	         $(".box3").append(value.deaths);
	         $(".box4").append(value.discharged);
	          $(".box5").append(value.totalConfirmed-value.discharged);
	      }
	   
	      
	      });
	               
	       
	           
	   
	      
	      });
	      }
	               
	       
	           
	   
	      
	      });
	           
	       
}
	   });
	    
	});
	

    
