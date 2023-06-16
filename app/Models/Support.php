<?php

namespace App\Models;

use App\Enums\SupportStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

//    protected $casts = [
//        'status' => SupportStatus::class,
//    ];

    public function status(): Attribute
    {
        return Attribute::make(
            set: fn (SupportStatus $status) => $status->name,
        );
    }
}
