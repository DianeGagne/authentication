<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class SignInController extends Controller
{
    public function signin(){
    	return view('auth.signin');
    }

    public function loggedin(){
    	return view('auth.loggedin');
    }

    public function signup(){
    	return view('auth.signup');
    }

    public function create(){

    	$input = Request::all();

    	User::create($input);

    	return view('auth.loggedin');
    }
}
