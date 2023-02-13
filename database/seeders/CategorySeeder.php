<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [
                'name' => 'Ciencia Ficción'
            ],
            [
                'name' => 'Deporte'
            ],
            [
                'name' => 'Distópico'
            ],
            [
                'name' => 'Fantasía'
            ],
            [
                'name' => 'Historia'
            ],
            [
                'name' => 'Horror'
            ],
            [
                'name' => 'Josei'
            ],
            [
                'name' => 'LGBT'
            ],
            [
                'name' => 'Acción y Aventura'
            ],
            [
                'name' => 'Romance'
            ],
            [
                'name' => 'Medios'
            ],
            [
                'name' => 'Misterio'
            ],
            [
                'name' => 'No Ficción'
            ],
            [
                'name' => 'Religión Y Espiritualidad'
            ],
            [
                'name' => 'Seinen'
            ],
            [
                'name' => 'Shojo'
            ],
            [
                'name' => 'Shonen'
            ],
            [
                'name' => 'Yaoi'
            ],
            [
                'name' => 'Yuri'
            ],
        ];


        foreach($categories as $key => $value){
            Category::Create($value);
        }
    }
}
