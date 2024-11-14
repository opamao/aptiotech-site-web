<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'cv_cand',
        'nom_cand',
        'email_cand',
        'github_cand',
        'linkedin_cand',
        'message_cand',
     ];

     protected $primaryKey = 'idcand';

     protected $table = 'candidatures';
}
