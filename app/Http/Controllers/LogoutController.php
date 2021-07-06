<?php

namespace App\Http\Controllers;

use App\Models\Logout;
use Illuminate\Http\Request;
use Illuminate\Auth;

class LogoutController extends Controller
{
  public function logout(Request $request) {
    Auth::logout();
    return redirect('/login');
  }
 

}
