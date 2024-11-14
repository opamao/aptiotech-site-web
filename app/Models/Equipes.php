<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipes extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_equip',
        'nom_equip',
        'prenom_equip',
        'poste_equip',
     ];

     protected $primaryKey = 'idequip';

     protected $table = 'equipes';
}
