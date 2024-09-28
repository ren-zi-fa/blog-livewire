<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
                    'uuid'=>Str::uuid(),
                    'name' => 'renzi',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('12345678'),
                ],
                [
                    'uuid'=>Str::uuid(),
                    'name' => 'user',
                    'email' => 'user@gmail.com',
                    'password' => Hash::make('12345678'),
                ],
            ]

        );
    }
   
}
