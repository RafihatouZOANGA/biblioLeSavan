<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassementController extends Controller
{
    public function classement(){
        return view('classementLivre');
    }
}
