<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@master.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'username' => 'admin.secret',
            'email' => 'secret@master.com',
            'password' => Hash::make('secret'),
        ]);

        User::create([
            'username' => 'admin.password',
            'email' => 'password@master.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'username' => 'user',
            'email' => 'user@master.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'username' => 'mister.cool',
            'email' => 'mister@master.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'username' => 'miss.excellent',
            'email' => 'missus@master.com',
            'password' => Hash::make('password'),
        ]);
    }
}
