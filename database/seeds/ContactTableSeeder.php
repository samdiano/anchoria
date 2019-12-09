<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'main' => '',
            'banner' => '',
            'address' => '',
            'phone' => '',
            'phone_2' => '',
            'email' => '',
            'email_2' => '',
            'email_3' => '',
        ]);
    }
}
