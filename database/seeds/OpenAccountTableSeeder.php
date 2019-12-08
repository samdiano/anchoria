<?php

use Illuminate\Database\Seeder;

class OpenAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('open_accounts')->insert([
            'banner' => '',
            'main' => '',
            'sub' => '',
        ]);
    }
}
