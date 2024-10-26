<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Role::create([
            'id' => '1',
            'role_name' => 'superadmin',
        ]);
        Role::create([
            'id' => '2',
            'role_name' => 'admin',
        ]);
        Role::create([
            'id' => '3',
            'role_name' => 'cashier',
        ]);
    }
}