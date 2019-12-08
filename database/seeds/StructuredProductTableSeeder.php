<?php

use Illuminate\Database\Seeder;

class StructuredProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('structured_products')->insert([
            'banner' => '',
            'features' => '',
            'image_path' => '',
            'main' => '',
            'sub' => '',
        ]);
    }
}
