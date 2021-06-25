<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function log()
    {
        //echo "nahin";   function name r .file name same hoile prob nai  log and loginn same hoile
        return view("/login.loginn");
    }

    public function verify(Request $req){
      
   //   if($req->uname != $req ->password)
      {
        
         return redirect('/customerhomepage');
      }

      }
}
