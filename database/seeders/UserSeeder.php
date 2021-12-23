<?php

namespace Database\Seeders;

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
        $user = new User();
        $user->name = 'Fikri Nurfaizi';
        $user->email = 'admin1@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'Fikri Nurfaizo';
        $user->email = 'admin2@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'Fikri Nurfaizu';
        $user->email = 'admin3@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'Fikri Nurfaizh';
        $user->email = 'admin4@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'Fikri Nurfaizn';
        $user->email = 'admin5@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

    }
}
