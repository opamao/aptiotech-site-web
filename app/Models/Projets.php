<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_pro',
        'libelle_pro',
        'descripton_pro',
     ];

     protected $primaryKey = 'idpro';

     protected $table = 'projets';
}
