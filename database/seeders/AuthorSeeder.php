<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authors = [
            [
                'person_id' => 1
            ],
            [
                'person_id' => 2
            ],
            [
                'person_id' => 3
            ],
            [
                'person_id' => 4
            ],
            [
                'person_id' => 5
            ],
            [
                'person_id' => 6
            ],
            [
                'person_id' => 7
            ],
            [
                'person_id' => 8
            ],
            [
                'person_id' => 9
            ],
            [
                'person_id' => 10
            ],
            [
                'person_id' => 11
            ],
            [
                'person_id' => 12
            ],
            [
                'person_id' => 13
            ],
            [
                'person_id' => 14
            ],
            [
                'person_id' => 15
            ],
            [
                'person_id' => 16
            ],
            [
                'person_id' => 17
            ],
            [
                'person_id' => 18
            ],
            [
                'person_id' => 19
            ],
            [
                'person_id' => 20
            ],
            [
                'person_id' => 21
            ],
            [
                'person_id' => 22
            ],
            [
                'person_id' => 23
            ],
            [
                'person_id' => 24
            ],
            [
                'person_id' => 25
            ],
            [
                'person_id' => 26
            ],
            [
                'person_id' => 27
            ],
            [
                'person_id' => 28
            ],
            [
                'person_id' => 29
            ],
            [
                'person_id' => 30
            ],
            [
                'person_id' => 31
            ],
            [
                'person_id' => 32
            ],
            [
                'person_id' => 33
            ], 
            [
                'person_id' => 34
            ],
        ];

        foreach($authors as $key => $value){
            Author::create($value);
        }
    }
}
