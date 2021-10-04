<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('user.login');
    }
    public function cadastrar(){
        return view('user.cadastrar');
    }
}
