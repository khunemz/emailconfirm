<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(Request $request)
    {
        $validation = $this->validate($request, [
            'email' => 'required|max:255|min:3',
            'password' => 'required|min:6'
        ]);

        if(!!$validation){
            return redirect()->back();
        }

        $remember = $request->remember == '1' ? true:false;

        $authen = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember);

        if(! $authen){
            return redirect()->back();
        }
        else{
            return view('user.dashboard');
        }
    }
}
