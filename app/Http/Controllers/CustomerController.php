<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function register()
    {
    return view('Customer.post');
    }
      function store(Request $request)
      
      {
        //'type','name','address','cost','postedate'
        $customer =new Customer();
        $customer->type = $request->type;
        $is_saved = $customer->save();
      if($is_saved){
      echo "successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
}
}
