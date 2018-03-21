<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show() {
      $user = User::all();
      return view('show');
    }
}
