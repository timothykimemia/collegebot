<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\AdminLogin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminLogin::create([
            'username' => 'admin',
            'password' => Hash::make('123456789'),
        ]);

        AdminLogin::create([
            'username' => 'admin.secret',
            'password' => Hash::make('secret'),
        ]);

        AdminLogin::create([
            'username' => 'admin.password',
            'password' => Hash::make('password'),
        ]);
    }
}
