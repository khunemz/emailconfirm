<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class EmailController extends Controller
{
    public function verify(){
        return view('email.verify');
    }
    
    public function confirm(){
        return view('email.confirm');
    }

    public function store(Request $request){
        $validation = $this->validate($request,[
            'confirmation_code' => 'required'
        ]);

        if(!!$validation){
            return redirect()->back();
        }

        $user = User::where('confirmation_code',
            $request->confirmation_code)->first();

        if(!$user){
            return redirect()->back();
        }

        $user->isActivated = 1;
        $user->confirmation_code = null;
        $user->save();
        return view('login.index');

    }

}
