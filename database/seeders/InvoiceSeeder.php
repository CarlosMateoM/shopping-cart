<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
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

        foreach($invoices as $key => $value){
            Invoice::create($value);
        }
    }
}
