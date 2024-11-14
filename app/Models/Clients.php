<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_cli',
     ];

     protected $primaryKey = 'idcli';

     protected $table = 'clients';
}
