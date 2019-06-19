<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function Greetings(){
    return view('master');
    }

    public function About(){
        return view('static.about');
    }

    public function Home(){
        return view('static.home');
    }

    public function Contact(){
        return view('static.contact');
    }
}
