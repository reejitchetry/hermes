<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class profile extends Controller
{
    function profile()
    {
 
 
            $x="ADMIN@hermes.org";
            $y=DB::table('users')->where("email",$x)->value("password"); 
            $key=DB::table('users')->where("email",$x)->value("id");      
            $login=session('login');
         $username=decrypt(session('username'));
            $email=decrypt(session('email'));
 
     if(!strcasecmp($x,$email))
      {
          $x="u";
      }
      else
        $x="q";
        
       $key=encrypt($key);
   return view("profile",["EMAIL"=>$email,"LOGIN"=>$login,"USERNAME"=>$username,"x"=>$x,"y"=>$y,"KEY"=>$key]);
 
 
 
 
    }
}
