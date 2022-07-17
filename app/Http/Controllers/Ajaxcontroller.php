<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Ajaxcontroller extends Controller
{


    function botmessage(request $request)
    {
        
        
      $question=$request->post("question");  
      $answer=$request->post("answer"); 
   
$a=array("WERE ","BEING ","BEEN ","HAVE ","HAS ","HAD ","DOES ","DID ","WOULD ","WILL ","WOULD ","SHALL ","SHOULD ","MAY ","MIGHT ","MUST ","CAN ","COULD ","ARE ");

for($i=0;$i<19;$i++)  
   {
   
   $x=$a[$i];
   $question = str_ireplace($x,"",$question);
    }

   if(DB::table('bots')->where('question',$question)->exists())
   {
        
       
      $ans1= DB::table('bots')->where('question',$question)->value('ans1');
       $ans2= DB::table('bots')->where('question',$question)->value('ans2');
        $ans3= DB::table('bots')->where('question',$question)->value('ans3');
        
   
        if($ans1=="0"&&$ans2=="0"&&$ans3=="0")
        {

                  return response()->json(['data'=>$answer]);

        }
       else
       {
         $org=$answer;
                $a=0; $b=0; $c=0;
               if($ans1!="0")
               $a=$ans1;
               
                if($ans2!="0")
               $b=$ans2;
               
                if($ans3!="0")
               $c=$ans3;
               
               $message=array();
               
               if($a!="0")
                array_push($message,$a);
                if($b!="0")
                 array_push($message,$b);
                 if($c!="0")
                  array_push($message,$c);
                  
                  $last=count($message);
                  $l=$last-1;
                  $index=rand(0,$l);

               
               $answer=$message[$index];
               
             
              
           if($answer!="0")
            return response()->json(['data'=>$answer]);
             else
            return response()->json(['data'=>$org]);
           

           
       
       }

   }
        else
    {

         $temp=1;
  


                 if($temp==1)
           {
               

             $answer1=$answer;
            $answer2=$answer;
            $answer3=$answer;
                $toxic=0;
              $message=array();
 
            $haha=DB::table('bots')->get();  

            foreach ($haha as $key => $user) {
            	
            	   
                    $ans1=$user->ans1;
                     $ans2=$user->ans2;
                     $ans3=$user->ans3;
                     $q1=$user->question;


                     $str1=$q1;
                    $str2=$question;
        
                   $arr1 = explode(' ', $str1);
                   $arr2 = explode(' ', $str2);
                  $diff = array_diff($arr1, $arr2);
                   $similar=(count($arr1) - count($diff));
              
      
                 if($similar>$toxic)
               {
                  
                 
                    
                   $answer1=$ans1;
                   $answer2=$ans2;
                   $answer3=$ans3;
                   $toxic=$similar;
                   
                  
                }
             
             
                 
            }
          
              

             array_push($message,"$answer1");
              array_push($message,"$answer2");
                array_push($message,"$answer3");
                    $index=rand(0,2);
             $factor=($toxic/count($arr2));
        
            if((($factor>=0.75)&&(count($arr2)>5))||((count($arr2)==5)&&($factor>=0.8))||((count($arr2)<=4 )&& ($factor>=0.66)))
            {
              
                 $answer=$message[$index];
             
                if($answer!="0")
                { 
                 return response()->json(['data'=>$answer]);
                   $temp=2;
                   
                }  
            }
           
           
           
           }
           
           
           
    /////////////////////////////////////////////////////////////////      
         
         //keyword barrier
      if($temp==1)
      {

         $answer1=$answer;
            $answer2=$answer;
            $answer3=$answer;
                $toxic=0;
              $message=array();

          $haha=DB::table('bots')->get();  

           foreach ($haha as $key => $user) {
            	
            	   
                    $ans1=$user->ans1;
                     $ans2=$user->ans2;
                     $ans3=$user->ans3;
                     $q1=$user->keyword;


                     $str1=$q1;
                    $str2=$question;
        
                   $arr1 = explode(' ', $str1);
                   $arr2 = explode(' ', $str2);
                  $diff = array_diff($arr1, $arr2);
                   $similar=(count($arr1) - count($diff));
              
      
                 if($similar>$toxic)
               {
                  
                 
                    
                   $answer1=$ans1;
                   $answer2=$ans2;
                   $answer3=$ans3;
                   $toxic=$similar;
                   
                  
                }
             
             
                 
            }
          

               array_push($message,$answer1);
               array_push($message,$answer2);
                array_push($message,$answer3);
                $index=rand(0,2);
                $factor=($toxic/count($arr2));  
             
                   if(($factor>=0.27)||($toxic>0&&count($arr2)<=4)){
             
               
                $answer=$message[$index];
          
           if($answer!="0")
           {
            
             return response()->json(['data'=>$answer]);
            }
               
            }  
          


      }


      

         ////////////////////////////////
    if($temp==1)
         {
           //add to database
           
         DB::table("bots")->insert(
                    ['question'=>$question,
                    "ans1"=>"0",
                    "ans2"=>"0",
                    "ans3"=>"0",
                    "keyword"=>"0"]
                  );         
        
       if($answer!="0")
           {
            
             return response()->json(['data'=>$answer]);
            }
         
           }
  
  
  }
     




    }









}
