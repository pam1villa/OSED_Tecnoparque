<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function welcome(){return view ('welcome');}
    public function aboutus(){return view ('aboutus');}
    public function services(){return view ('services');}
    public function login(){return view ('/auth/login');}
    public function register(){return view ('/auth/register');}




}
