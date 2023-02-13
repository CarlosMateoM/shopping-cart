<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'manga_id',
        'quantity',
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
