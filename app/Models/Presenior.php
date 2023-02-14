<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presenior extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','nationalite','password','confirm','cin','document','dateobtention','etat'
    ];
}
