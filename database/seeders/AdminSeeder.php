<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    "name" => "renzi",
                    "email" => "admin@gmail.com",
                    "password" => Hash::make('12345678')
                ],
                [
                    "name" => "user",
                    "email" => "user@gmail.com",
                    "password" => Hash::make('12345678')
                ],
            ]

        );
    }
}
