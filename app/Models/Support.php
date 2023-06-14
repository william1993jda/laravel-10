<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

//    Aqui eu defino os campos que vão ser preenchidos do formulario
    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
}
