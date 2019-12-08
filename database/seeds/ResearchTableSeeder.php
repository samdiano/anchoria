<?php

use Illuminate\Database\Seeder;

class ResearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('researches')->insert([
            'banner' => '',
            'hero_text' => '',
            'main' => '',
            'sub' => '',
        ]);
    }
}
