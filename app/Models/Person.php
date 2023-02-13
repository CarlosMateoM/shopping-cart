<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'middle_name',
        'frist_surname',
        'second_surname',
    ];
}
