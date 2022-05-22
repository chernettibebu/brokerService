<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function register()
    {
    return view('Account.create_account');
    }
      function store(Request $request)
      
      {
//    'fName','lName','address','phone','password'
        $account =new Account();
        $account->fName = $request->fName;
        $account->lName = $request->lName;
        $account->address = $request->address;
        $account->phone = $request->phone;
        $account->password = $request->password;
        $is_saved = $account->save();
      if($is_saved){
      echo "Account created successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
}
}
