<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
  public function pay(Request $request){
    return view('pages.home');
    //$phone = $request->phone;
    //$amount = $request->total;
    //$request = mpesa_request($phone,$amount,'reference','Placing of Cake Order');
  }
}
