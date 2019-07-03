<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('manager')){
            //return view('home')->with('role','Manager');
            return redirect()->route('manager-home');
        } 
        elseif ($request->user()->hasRole('employee')){
            //return view('home')->with('role','Employee');
            return redirect()->route('manager-home');
        }  
    }
}
