<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    function __construct()  {
        $this->middleware('auth')->except('index');
    }
    function user(){
        $data = Auth::user();
            return view('user.user',compact('data'));
         
    }
}
