<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Linh',
            'email' => 'ltlinh311@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => '0912201718',
            'address' => str_random(20),
            'gender' => 1
        ]);
    }
}
