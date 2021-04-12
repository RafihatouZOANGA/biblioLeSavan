<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Administrateur;

class inscriptionController extends Controller
{
    public function inscription(){
        $data=request()->validate([
            'username'=>['required','string'],
            'email'=>['required','string','email','unique:administrateurs'],
            'password'=>['required', 'confirmed', 'min:3', 'max:6']
        ]);

        Administrateur::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
            Session::flash('message', 'vous avez ajouté un membre avec succes!');
            Session::flash('alert-class', 'alert-success text-center');
            return redirect()->back();
    }
    // public function inscription(Request $request){

    // // $request->validate([
    // //     'username'=>['required', 'string'],
    // //     'email'=>['required', 'email'],
    // //     'password'=>['required', 'confirmed'],
    // //     'password_confirmation'=>['required']
    // // ]);

    // $administrateur = new Administrateur;
    // $administrateur->username = $request->input('username');
    // $administrateur->email = $request->input('email');
    // $administrateur->password = $request->bcrypt('password');

    // $administrateur->save();
    // }
}
