<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $carts = [
            [
                'user_id' => 1
            ],
            [
                'user_id' => 2
            ],
            [
                'user_id' => 3
            ]
        ];

        foreach($carts as $key => $value){
            Cart::create($value);
        }
    }
}
