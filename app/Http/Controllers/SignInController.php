<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SignInController extends Controller
{
    public function signin(){
    	return view('pages.signin');
    }

    public function loggedin(){
    	return view('pages.loggedin');
    }

    public function signup(){
    	return view('pages.signup');
    }

    public function create(){
    	return view('pages.loggedin');
    }
}
