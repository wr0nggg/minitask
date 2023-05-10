<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'superAdminUser',
            'email' => 'superAdminUser@email.sk',
            'password' => Hash::make('123456'),
        ]);
        $superAdmin->assignRole('superadmin');
        User::create([
            'name' => 'normalUser',
            'email' => 'normalUser@email.sk',
            'password' => Hash::make('123456'),
        ]);


    }
}
