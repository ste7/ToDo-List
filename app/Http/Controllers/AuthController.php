<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function getSignUp(){
        return view('auth.signup');
    }

    public function postSignUp(Request $request){
        $this->validate($request, [
            'username' => 'required|unique:users|min:6|max:50|',
            'email' => 'required|email|max:255|',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return Redirect()->route('home')->with('info', 'You have successfully sign up.');
    }
    

    public function getSignIn(){
        return view('auth.signin');
    }

    public function postSignIn(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('home')->with('info', 'You have successfully sign in.');
        } else{
            return redirect()->back()->with('info', 'Could not you sign in with those details.');
        }
    }
    

    public function getSignOut(){
        Auth::logout();

        return redirect()->route('home');
    }
}
