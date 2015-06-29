<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

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

    	$input = Request::all();

    	User::create($input);

    	return view('pages.loggedin');
    }
}
