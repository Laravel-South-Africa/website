<?php

namespace App\Http\Controllers;

use App\Signup;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showWelcome()
    {
        return view('welcome');
    }

    public function postSignup()
    {
        Signup::create(request()->only(['email']));

        return view('thank-you');
    }
}
