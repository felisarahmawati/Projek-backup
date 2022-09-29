<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admintitipsini'),
            
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('usertitipsini'),
            
        ]);

        $user->assignRole('user');

        $superadmin = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmintitipsini'),
        ]);

        $superadmin->assignRole('superadmin');

        $vendor = User::create([
            'name' => 'Vendor',
            'email' => 'vendor@gmail.com',
            'password' => bcrypt('vendortitipsini'),
            
        ]);

        $vendor->assignRole('vendor');

        $finance = User::create([
            'name' => 'Finance',
            'email' => 'finance@gmail.com',
            'password' => bcrypt('financetitipsini'),
            
        ]);

        $finance->assignRole('finance');
    }
}
