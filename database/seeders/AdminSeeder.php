<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'Super Admin Kyaw Zin Lin',
            'email'=>'superadmin@gmail.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>1,
        ]);

        Admin::create([
            'name'=>' Admin Kyaw Zin Lin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>2,
        ]);
    }
}
