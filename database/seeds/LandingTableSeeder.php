<?php

use Illuminate\Database\Seeder;

class LandingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('landings')->insert([
            'hero' => '',
            'services' => '',
        ]);
    }
}
