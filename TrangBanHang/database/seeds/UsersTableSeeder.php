<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->full_name = 'admin';
        $user->phone = '9928282';
        $user->address = 'ha noi';
        $user->email = 'phanchaudhv@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
