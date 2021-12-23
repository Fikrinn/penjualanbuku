<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
        ]);

        $customer = Role::create([
            'name' => 'customer',
            'display_name' => 'Customer',
        ]);

        $admin = new User();
        $admin->name = 'Fikri Nurfaizi';
        $admin->email = 'admin1@gmail.com';
        $admin->password = Hash::make('rahasia');
        $admin->save();

        $customer = new User();
        $customer->name = 'Customer';
        $customer->email = 'customer@gmail.com';
        $customer->password = Hash::make('rahasia');
        $customer->save();

        $admin->attachRole($admin);
        $customer->attachRole($customer);
    }
}
