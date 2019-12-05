<?php

use Illuminate\Database\Seeder;

class WhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('whos')->insert([
            'hero' => '',
            'quote' => '',
            'vision' => '',
            'side_text' => '',
            'image_path' => '',
            'mission' => '',
            'integrity' => '',
            'client_focus' => '',
            'leadership' => '',
            'collaboration' => '',
        ]);
    }
}
