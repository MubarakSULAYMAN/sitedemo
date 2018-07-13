<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHome()
    {
        return view('home');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function getContact()
    {
        return view('contact');
    }
    
    public function getSignup()
    {
        return view('signup');
    }

    // public function getHome()
    // {
    //     return view('home');
    // }
}
