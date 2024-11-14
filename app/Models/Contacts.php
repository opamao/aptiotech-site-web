<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_cont',
        'phone_cont',
        'local_cont',
        'travail_cont',
        'map_cont',
     ];

     protected $primaryKey = 'idcont';

     protected $table = 'contacts';
}
