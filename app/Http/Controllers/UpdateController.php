<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// pas besoin d'un autre model pour la modification. celui qui a servi pour ajouter les livre suffit
use App\Livre;
use App\Update;


class UpdateController extends Controller
{
    public function edit($id){
        $livre = Livre::find($id);
        return view('modifier', compact('livre'));
    }

    public function update($id){
         request()->validate([
            'titre'=>'required',
            'nom_prenom_auteur'=>'required',
            'parution'=>'required',
            'type'=>'required',
            'pays'=>'required',
        ]);

        $livre=Livre::find($id);
        $livre->update(request()->all());

        return redirect()->route('index.livre');
    }

    public function delete($id){
        $livre=Livre::find($id);
        $livre->delete();

        Session::flash('message', 'Votre livre  a été supprimé avec success.');
        Session::flash('alert-class', 'alert-success text-center');
        return redirect()->route('index.livre');
    }



     //route pour afficher la page
    //  public function form(Request $request){
    //     return view('modifier');
    // }

    // public function edit(Request $request){
        
    //     $data = [
    //         $request->input('titre'),
    //         $request->input('nom_prenom_auteur'),
    //         $request->input('parution'),
    //         $request->input('type'),
    //         $request->input('pays'),
            
    //     ];
        
    //     $livres=livre::find($data[0]);
    //     $livres->titre=$data[1];
    //     $livres->titre=$data[2];
    //     $livres->titre=$data[3];
    //     $livres->titre=$data[4];
    //     $livres->titre=$data[5];

    //     $livres->save();
    // }

    //  //route pour afficher la page
    //  public function form(){
    //     $livres=Livre::where('id', '$id')->('');
    //     // $livres=Livre::all();
    //     return view('modifier' ,compact('livres'));
    // }

    // public function modifier(){
    //     $livres=Livre::where('id');
    //     $livres=Livre::all();
    //     return view('modifier',compact('livres'));
    // }







    //pour enregistrer dans la base de données
    // public function edit(Request $request){
    //    $data=[
    //         $data->input('titre'),
    //         $data->input('nom_prenom_auteur'),
    //         $data->input('parution'),
    //         $data->input('type'),
    //         $data->input('pays'),
    //     ]);
            // livre::find($data)
    // }
}