<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create ([
            'name' => 'bellya',
            'username' => 'petrovaline',
            'role' => 'admin',
            'password' => 'ryangosling',
        ]);

        User::create ([
            'name' => 'kasir1',
            'username' => 'kasir1',
            'role' => 'kasir',
            'password' => 'kasir123',
        ]);
    }
}
