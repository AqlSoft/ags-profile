<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Super Admin',
            'email' => 'super-super-admin@ags.com',
            'username' => 'super super admin',
            'password' => Hash::make('Admin@123'),
            'is_super_admin' => true,
            'status' => true,
        ]);
        Admin::create([
            'name' => 'Sub Admin',
            'email' => 'sub-admin@ags.com',
            'username' => 'sub admin',
            'password' => Hash::make('Admin@123'),
            'is_super_admin' => true,
            'status' => true,
        ]);
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'super-admin@ags.com',
            'username' => 'super admin',
            'password' => Hash::make('Admin@123'),
            'is_super_admin' => true,
            'status' => true,
        ]);
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@ags.com',
            'username' => 'admin',
            'password' => Hash::make('Admin@123'),
            'is_super_admin' => true,
            'status' => true,
        ]);
        Admin::create([
            'name' => 'Worker',
            'email' => 'worker@ags.com',
            'username' => 'worker',
            'password' => Hash::make('Admin@123'),
            'is_super_admin' => false,
            'status' => true,
        ]);
    }
}
