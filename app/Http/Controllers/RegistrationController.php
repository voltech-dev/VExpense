<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{

public function register_create(){
  return view('auth.registration');
}
 public function register_store(Request $request){
   $request->validate([
        'name'=> 'required|unique:users,name',
        'email'=> 'required|unique:users,email',
        'password'=> 'required|unique:users,password',

   ],[
    'name.required' => '*Username field cannot be empty.',
    'email.required' => '*Email-ID field cannot be empty.',
    'password.required' => '*Password field cannot be empty.',
  ]);
   $user = new User;
   $user->name = $request->name;
   $user->email = $request->email;
   $user->password = Hash::make($request->password);
   $user->save();
   return redirect('login');

 }

}
