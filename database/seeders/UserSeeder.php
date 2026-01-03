<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@speaksmarter.com',
            'password' => Hash::make('admin')
        ])->assignRole('admin');

        User::create([
            'name' => 'editor',
            'email' => 'editor@speaksmarter.com',
            'password' => Hash::make('editor')
        ])->assignRole('editor');
    }
}
