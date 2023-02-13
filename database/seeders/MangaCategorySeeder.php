<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MangaCategory;

class MangaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $manga_categories = [
            [
                'category_id' => 1,
                'manga_id' => 1,
            ],
            [
                'category_id' => 1,
                'manga_id' => 2,
            ],
            [
                'category_id' => 1,
                'manga_id' => 3,
            ],
            [
                'category_id' => 1,
                'manga_id' => 4,
            ],
            [
                'category_id' => 2,
                'manga_id' => 5,
            ],
            [
                'category_id' => 2,
                'manga_id' => 6,
            ],
            [
                'category_id' => 2,
                'manga_id' => 7,
            ],
            [
                'category_id' => 2,
                'manga_id' => 8,
            ],
            [
                'category_id' => 3,
                'manga_id' => 9,
            ],
            [
                'category_id' => 3,
                'manga_id' => 10,
            ],
            [
                'category_id' => 3,
                'manga_id' => 11,
            ],
            [
                'category_id' => 3,
                'manga_id' => 12,
            ],
            [
                'category_id' => 5,
                'manga_id' => 13,
            ],
            [
                'category_id' => 5,
                'manga_id' => 14,
            ],
            [
                'category_id' => 5,
                'manga_id' => 15,
            ],
            [
                'category_id' => 5,
                'manga_id' => 16,
            ],
            [
                'category_id' => 6,
                'manga_id' => 17,
            ],
            [
                'category_id' => 6,
                'manga_id' => 18,
            ],
            [
                'category_id' => 6,
                'manga_id' => 19,
            ],
            [
                'category_id' => 6,
                'manga_id' => 20,
            ],
            [
                'category_id' => 7,
                'manga_id' => 21,
            ],
            [
                'category_id' => 7,
                'manga_id' => 22,
            ],
            [
                'category_id' => 7,
                'manga_id' => 23,
            ],
            [
                'category_id' => 7,
                'manga_id' => 24,
            ],
            [
                'category_id' => 8,
                'manga_id' => 25,
            ],
            [
                'category_id' => 8,
                'manga_id' => 26,
            ],
            [
                'category_id' => 8,
                'manga_id' => 27,
            ],
            [
                'category_id' => 9,
                'manga_id' => 28,
            ],
            [
                'category_id' => 9,
                'manga_id' => 29,
            ],
            [
                'category_id' => 9,
                'manga_id' => 30,
            ],
            [
                'category_id' => 9,
                'manga_id' => 31,
            ],
            [
                'category_id' => 10,
                'manga_id' => 32,
            ],
            [
                'category_id' => 10,
                'manga_id' => 33,
            ],
            [
                'category_id' => 10,
                'manga_id' => 34,
            ],
            [
                'category_id' => 10,
                'manga_id' => 35,
            ],
            [
                'category_id' => 11,
                'manga_id' => 36,
            ],
            [
                'category_id' => 11,
                'manga_id' => 37,
            ],
            [
                'category_id' => 11,
                'manga_id' => 38,
            ],
            [
                'category_id' => 11,
                'manga_id' => 39,
            ],
            [
                'category_id' => 11,
                'manga_id' => 40,
            ],
            [
                'category_id' => 12,
                'manga_id' => 41,
            ],
            [
                'category_id' => 12,
                'manga_id' => 42,
            ],
            [
                'category_id' => 12,
                'manga_id' => 43,
            ],
            [
                'category_id' => 12,
                'manga_id' => 44,
            ],
            [
                'category_id' => 14,
                'manga_id' => 45,
            ],
            [
                'category_id' => 14,
                'manga_id' => 46,
            ],
            [
                'category_id' => 14,
                'manga_id' => 47,
            ],
            [
                'category_id' => 15,
                'manga_id' => 48,
            ],
            [
                'category_id' => 15,
                'manga_id' => 49,
            ],
            [
                'category_id' => 15,
                'manga_id' => 50,
            ],
            [
                'category_id' => 15,
                'manga_id' => 51,
            ],
            [
                'category_id' => 16,
                'manga_id' => 52,
            ],
            [
                'category_id' => 16,
                'manga_id' => 53,
            ],
            [
                'category_id' => 16,
                'manga_id' => 54,
            ],
            [
                'category_id' => 16,
                'manga_id' => 55,
            ],
            [
                'category_id' => 17,
                'manga_id' => 56,
            ],
            [
                'category_id' => 17,
                'manga_id' => 57,
            ],
            [
                'category_id' => 17,
                'manga_id' => 58,
            ],
            [
                'category_id' => 17,
                'manga_id' => 59,
            ],
            [
                'category_id' => 18,
                'manga_id' => 60,
            ],
            [
                'category_id' => 18,
                'manga_id' => 61,
            ],
            [
                'category_id' => 18,
                'manga_id' => 62,
            ],
            [
                'category_id' => 18,
                'manga_id' => 63,
            ],
            [
                'category_id' => 19,
                'manga_id' => 64,
            ],
            [
                'category_id' => 19,
                'manga_id' => 65,
            ],
            [
                'category_id' => 19,
                'manga_id' => 66,
            ],
            [
                'category_id' => 19,
                'manga_id' => 67,
            ],
        ];

        foreach($manga_categories as $key => $value){
            MangaCategory::create($value);
        }

    }
}
