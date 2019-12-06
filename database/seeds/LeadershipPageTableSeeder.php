<?php

use Illuminate\Database\Seeder;

class LeadershipPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leadership_pages')->insert([
            'main' => '',
            'banner' => '',
            'sub' => ''
        ]);
    }
}
