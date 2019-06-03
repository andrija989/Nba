<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function log() {
        return view('/auth.login');
    }

    public function store()
    {
        if(!auth()->attempt(request(['email','password']))) 
        {
            return back()->withErrors([
                'message' => 'Bad credentials. Please try again'
            ]);
        }
        
        session()->flash('Wellcome, thanks for comming back');
        
        return redirect('/teams');
    }
    public function destroy() 
    {
        auth()->logout();
        return redirect('/teams');
    }
}
