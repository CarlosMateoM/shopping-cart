<?php

namespace Database\Seeders;

use App\Models\ItemInvoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $itemInvoice = [
            [
                'invoice_id' => 1,
                'manga_id' => 1,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 1,
                'manga_id' => 2,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 1,
                'manga_id' => 3,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 1,
                'manga_id' => 4,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 2,
                'manga_id' => 5,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 2,
                'manga_id' => 6,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 2,
                'manga_id' => 7,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 3,
                'manga_id' => 8,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 3,
                'manga_id' => 3,
                'quantity' => 1,
            ],
            [
                'invoice_id' => 3,
                'manga_id' => 10,
                'quantity' => 1,
            ]

        ];

        foreach($itemInvoice as $key => $value){
            ItemInvoice::create($value);
        }
    }

    
}
