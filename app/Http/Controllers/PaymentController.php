<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
     public function weeklypay()
    {
       
         return view ('/payment.weeklypay');
    }
     public function monthlypay()
    {
       
         return view ('/payment.monthlypay');
    }
     public function yearlypay()
    {
      
         return view ('/payment.yearlypay');
    }
}
