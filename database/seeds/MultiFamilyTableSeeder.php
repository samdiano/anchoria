<?php

use Illuminate\Database\Seeder;

class MultiFamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('multi_families')->insert([
            'banner' => '',
            'side_text' => '',
            'image_1' => '',
            'image_2' => '',
            'main' => '',
            'sub' => '',
        ]);
    }
}
