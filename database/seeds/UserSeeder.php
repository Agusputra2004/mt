<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $admin= User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'role'=>'admin',
        ]);
        $operator= User::create([
            'name'=>'operator',
            'email'=>'operator@gmail.com',
            'password'=>Hash::make('operator'),
            'role'=>'operator',
        ]);
        $user= User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user'),
        ]);
    }
}
