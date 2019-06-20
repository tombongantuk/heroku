<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\ContactRequest;
use Illuminate\Support\Facades\Input;

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

    public function ProsesContactUs(Request $request){
        
         //$response=$request->all();
        // return view('static.contact',compact('response'));

        $action= Input::get('action','none');

        if ($action=='+'){
            return "+ di pencet";
        }else if ($action =='-'){
            return "- di pencet";
        }else if ($action =='*'){
            return " * di pencet";
        }else if ($action =='/'){
            return "/ di pencet";
        }else if ($action =='submit'){
            return view('static.contact');   
        }else {
            return "% di pencet";
        }
    }
}
