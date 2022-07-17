<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    function dashboard()
    {
       $USERNAME=decrypt(session('username'));
 
 
 
    $see=0;
       
  $login=session()->get('login');
       $comments1="";
        $comments2="";
         $comments3="";
    if($login==0)
    {
 
    $comments1=" WELCOME";
    $comments2="$USERNAME !!";
    $comments3="Fly to a magical place with me ..";
    $see=1;
     }
      if($login==9)
      {
           $comments1="HURRAY!! ";
    $comments2="10 logins";
    $comments3="You just achieved a milestone..";
   $see=1;
   }
     if($login==49)
     {
          $comments1=" WOW!!";
    $comments2="50 logins";
    $comments3="I guess you are loving me..";
    $see=1;
    }
     if($login==99)
     {
          $comments1=" WHOOPEE!! ";
    $comments2="99 logins";
    $comments3="Thank you for brightening HERMES'S MAGICAL WORLD...";
   $see=1;
  }
     if($login==499)
    {
     $comments1="YIPEE";
    $comments2="500 logins";
    $comments3="I cant't believe you made it to here..";
     $see=1;
     }
     if($login==999)
    {
         $comments1="THIS IS GREAT ";
    $comments2="1000 logins";
    $comments3=" You are hilarious,beautiful &awesome...";
     $see=1;
     }
 
          
          
          
             if($login==9||$login==0||$login==49||$login==99||$login==499||$login==999)
             {
            session()->put("login",$login+1);
          }
 
 
           return view('dashboard',["see"=>$see,"comments1"=>$comments1,"comments2"=>$comments2,"comments3"=>$comments3,"username"=>$USERNAME]).view('chatbot',["username"=>$USERNAME]);
 
 
    }

}
