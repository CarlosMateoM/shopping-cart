<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function mangas(){
        return $this->belongsToMany(Manga::class, 'item_invoices')->withPivot('quantity','id');
    }

}
