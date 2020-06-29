<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    // Rendering the Login Page
    public function loginView() {
        return view('auth.login');
    }

    // Rendering the Registration Page
    public function registrationView() {
        return view('auth.registration');
    }

    // Handling Users registration
    public function registration(Request $request)
    {
        // Validation
       $this->validate($request, [
           'name' => 'required|unique:users|max:20', 
           'email' => 'required|unique:users|email|max:255', 
           'password' => 'required|min:6', 

       ]);

       //  Create new User
       User::create([
           'email' => $request->input('email'),
           'name' => $request->input('name'),
           'password' => bcrypt($request->input('password')),
       ]);

       return redirect('/');
    }


    public function login(Request $request)
    {
        // Validation
       $this->validate($request, [
           'email' => 'required|email|max:255', 
           'password' => 'required|min:6', 
       ]);

       // Authentification
       if(!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back();
       }

       return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
