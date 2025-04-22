<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Teacher::create([
            // 'username' => 'mathias',
            'email' => 'bizmath@gmail.com',
            'password' => Hash::make('bizmath123')
        ]);
    }
}
