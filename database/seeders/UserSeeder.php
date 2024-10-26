<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'id' => '1',
        //     'name' => 'superadmin1',
        //     'email' => 'superadmin1@gmail.com',
        //     'password' => Hash::make('superadmin111'),
        //     'role_id' => '1',
        // ]);
        User::create([
            'id' => '2',
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin111'),
            'role_id' => '2',
        ]);
        User::create([
            'id' => '3',
            'name' => 'cashier1',
            'email' => 'cashier1@gmail.com',
            'password' => Hash::make('cashier111'),
            'role_id' => '3',
        ]);
    }
}