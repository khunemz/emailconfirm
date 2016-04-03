<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request){

        $validation = $this->validate($request,[
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'isAgree' => 'required'
        ]);

        if(!!$validation){
            return redirect()->back();
        }

        $confirmation_code = str_random(30);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'confirmation_code' => $confirmation_code,
            'password' => bcrypt($request->password)
        ]);


        Mail::send('email.verify', ['confirmation_code' => $confirmation_code],
            function($m) use($request){
            $m->from('foo@example.com', 'Email Confirm App')
                ->to($request->email, $request->name)
                ->subject('localhost: verify email address');
        });

        Flash::message('Thank you for signing up! Please check your email');

        return redirect()->route('email.confirm');



    }
}
