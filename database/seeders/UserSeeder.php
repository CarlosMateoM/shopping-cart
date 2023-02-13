<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'person_id' => '35',
                'email' => 'demo1@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2a$12$otlTjH16acMBb2/bUwNnZuHCY8wWVZS6/C9UgOSWw3aqiieY4nvt2', //demo1234
                'remember_token' => '123456',
            ],
            [
                'person_id' => '36',
                'email' => 'demo2@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2a$12$otlTjH16acMBb2/bUwNnZuHCY8wWVZS6/C9UgOSWw3aqiieY4nvt2', //demo1234
                'remember_token' => '123456',
            ],
            [
                'person_id' => '37',
                'email' => 'demo3@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2a$12$otlTjH16acMBb2/bUwNnZuHCY8wWVZS6/C9UgOSWw3aqiieY4nvt2', //demo1234
                'remember_token' => '123456',
            ],
        ];

        foreach($users as $key => $value){
            User::create($value);
        }   
    }
}
