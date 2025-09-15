<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    
  public function store(Request $request){
    $request->validate([
      'name'=>'required|string|max:255',
      'password'=>'required|string|min:8|confirmed',
    ]);

    $data=User::create([
    'name'=>$request->name,
    'password'=>Hash::make($request->password),
    ]);

if($data){

    return "user created";
}else{
    return "something went wrong";
  }
### or  

// return route('home')->with('success','user created');

}
}
