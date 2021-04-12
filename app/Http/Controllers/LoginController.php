<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect, Reponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // public function __construct(){

    // }
    public function page_connexion(){
    
        return view('connexion');
    }
    public function login_store(Request $request){
        request()->validate([
            'email' => ['required', 'string'],
            'password' => 'required',
            ]);
            
            $connect = $request->only('email', 'password');
         
            if (Auth::guard("admin")->attempt($connect)) {
                // Authentication passed...
                return redirect('accueil');
            }
            return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');  
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
