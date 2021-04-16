<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class ListeController extends Controller
{
    public function index(){
        $livres=livre::all();
        return view('liste',compact('livres'));
    }
}
