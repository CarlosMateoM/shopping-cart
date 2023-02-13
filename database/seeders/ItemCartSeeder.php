<?php

namespace Database\Seeders;

use App\Models\ItemCart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $itemCart = [
            [
                'cart_id' => 1,
                'manga_id' => 1,
                'quantity' => 1,
            ],
            [
                'cart_id' => 1,
                'manga_id' => 2,
                'quantity' => 1,
            ],
            [
                'cart_id' => 1,
                'manga_id' => 3,
                'quantity' => 1,
            ],
            [
                'cart_id' => 1,
                'manga_id' => 4,
                'quantity' => 1,
            ],
            [
                'cart_id' => 2,
                'manga_id' => 5,
                'quantity' => 1,
            ],
            [
                'cart_id' => 2,
                'manga_id' => 6,
                'quantity' => 1,
            ],
            [
                'cart_id' => 2,
                'manga_id' => 7,
                'quantity' => 1,
            ],
        ];

        foreach($itemCart as $key => $value){
            ItemCart::create($value);
        }
    }
}
