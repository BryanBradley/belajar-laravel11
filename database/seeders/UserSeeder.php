<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Bryan Bradley',
            'username' => 'RhibeX',
            'email' => 'bryan@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        User::factory(5)->create();
    }
}
