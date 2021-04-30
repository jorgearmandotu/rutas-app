<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification',
        'name',
        'name_subsidiary',
        'type_subsidiary',
        'phone',
        'location',
    ];
}
