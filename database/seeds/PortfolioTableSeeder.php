<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'banner' => '',
            'side_text' => '',
            'footer_text' => '',
            'image_path' => '',
            'main' => '',
            'sub' => '',
        ]);
    }
}
