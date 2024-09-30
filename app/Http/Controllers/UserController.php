<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('user.register');
    }

    public function postRegister()
    {
        return view('home');
    }
}
