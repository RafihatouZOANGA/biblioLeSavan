<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable=[
        'titre', 'nom_prenom_auteur', 'parution','type', 'pays',
    ];
}
