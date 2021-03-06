<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
