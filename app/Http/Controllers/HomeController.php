<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return 'About page';
    }

    public function service(){
        return 'Service page';
    }

    public function contact(){
        return 'Contact page';
    }

    public function login(){
        return 'Login page';
    }

}
