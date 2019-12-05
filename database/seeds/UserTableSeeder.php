<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@anchoria.com',
            'name' => 'Admin',
            'password' => bcrypt('adminpassword'),
        ]);
    }
}