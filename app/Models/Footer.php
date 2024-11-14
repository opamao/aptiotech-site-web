<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_foot',
        'lien_foot',
     ];

     protected $primaryKey = 'idfoot';

     protected $table = 'footer';
}
