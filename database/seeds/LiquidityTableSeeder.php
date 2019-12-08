<?php

use Illuminate\Database\Seeder;

class LiquidityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('liquidities')->insert([
            'banner' => '',
            'features' => '',
            'image_path' => '',
            'main' => '',
            'sub' => '',
        ]);
    }
}
