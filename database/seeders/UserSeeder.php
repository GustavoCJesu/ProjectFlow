<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Gustavo',
            'email' => 'gustavo@gmail.com',
            'password' => bcrypt('123456'),
            'is_active' => true,
            'deactived_at' => null,
        ]);
    }
}
