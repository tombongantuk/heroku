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
        return view('static.iseng');
    }

    public function ProsesContactUs(Request $request){
        
        $response=$request->name;
        return view('static.contact',compact('response'));
    }
    
    public function Arr(Request $request){
        $response=$request->name;
        foreach ($input as $value) {
            if ($value%2==0){
                $genap=[$value];
            }
            if ($value%2!=0){
                $ganjil=[$value];
            }
        }
        return view('static.iseng',compact('response')); 
    }
}
