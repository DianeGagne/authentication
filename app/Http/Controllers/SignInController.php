<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class SignInController extends Controller
{
    /*
     * Force the user to be authenticated for any pages routed to in here
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function loggedin(){

    	return view('auth.loggedin');
    }

}
