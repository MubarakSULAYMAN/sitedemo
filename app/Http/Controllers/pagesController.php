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

    public function getExplore()
    {
        return view('explore');
    }

    public function getLogin()
    {
        return view('login');
    }
    
    public function getCustomize()
    {
        return view('customize');
    }

    public function getCart()
    {
        return view('cart');
    }

    public function getContact()
    {
        return view('contact');
    }
    
    public function getSignup()
    {
        return view('register');
    }

    public function getBeStudent()
    {
        return view('be_student');
    }

    public function getArrivals()
    {
        return view('arrivals');
    }

    public function getMessages()

    {
        return view('messages');
    }
}
