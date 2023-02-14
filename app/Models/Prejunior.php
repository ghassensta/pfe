<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prejunior extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','naiss','tel','nationalite','adresse','codepostal','document','atestation',
    ];
}
