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
        $user = User::create([
            'name' => 'test',
            'phone_number' => '123456789',
            'email' => 'test@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $user->products()->create([
            'name' => 'test name',
            'description' => 'test description',
            'count' => 10,
        ]);

        $user->products()->create([
            'name' => 'test name 2',
            'description' => 'test description 2',
            'count' => 10,
        ]);

        $user->products()->create([
            'name' => 'test name 3',
            'description' => 'test description 3',
            'count' => 10,
        ]);

    }
}
