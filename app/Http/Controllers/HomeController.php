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

    public function dashboard()
    {
        return view('dashboard');
    }

    public function privacyPolicy()
    {
        return view('privacy_policy');
    }
}
