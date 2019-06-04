<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function create() 
    {
        return view('/auth.register');
    }
    public function store(Request $request) 
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        // $user = User::create(request()->all());
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        if(request("password")!=request("password_confirmation"))
        {
            session()->flash("message", "Password and password-verification are not identical, please try again");
            return redirect()->route("register-form");
        }

        $user->save();
        auth()->login($user);
        
        return redirect()->route('teams-list');
    }
}
