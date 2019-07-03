<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class ManagerController extends Controller
{
    public function index(){
        return view('manager.home');
    }
}
