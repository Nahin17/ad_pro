<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

        public function profile()
        {
        return view('/cprofile.profile3');

         }

           public function uprofile(){
            return view('/cprofile.updateprofile3');
        }

    
}
