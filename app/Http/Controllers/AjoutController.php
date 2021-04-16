<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Livre;

class AjoutController extends Controller
{
    //route pour afficher le formulaire
    public function form(){
        return view('ajouterlivre');
    }



    //pour enregistrer dans la base de données
    public function store(Request $request){
        request()->validate([
            'titre'=>['required','string'],
            'nom_prenom_auteur'=>['required','string'],
            'parution'=>['required','date'],
            'type'=>['required','string'],
            'pays'=>['required','string'],
        ]);
        //appeler le model
        Livre::create([
            'titre'=>$request->titre,
            'nom_prenom_auteur'=>$request->nom_prenom_auteur,
            'parution'=>$request->parution,
            'type'=>$request->type,
            'pays'=>$request->pays,
        ]);
            Session::flash('message', 'Un livre  a été ajouté avec success.');
            Session::flash('alert-class', 'alert-success text-center');
        return redirect()->route('ajout.livre');
    }
    
}
