<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
class ServiceController extends Controller
{
    //
    public function register()
    {
    return view('Service.register');
    }
      function store(Request $request)
      
      {
        //'type','name','address','cost','postedate'
        $service =new Service();
        $service->type = $request->type;
        $service->name = $request->name;
        $service->address = $request->address;
        $service->cost = $request->cost;
        $service->postedate = $request->postedate;
        $is_saved = $service->save();
      if($is_saved){
      echo "Service data registred successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
}


public function get_all()
{
 $service = service::all();
 return view('Service.list', compact('Service'));
}
 


    public function get_by_id($id)
 {
  $service = service::where('id', $id)->first();
  return view('Service.search', compact('Service'));
  }
}
