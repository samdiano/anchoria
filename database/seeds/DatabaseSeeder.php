<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            LandingTableSeeder::class,
            WhoTableSeeder::class,
            LeadershipPageTableSeeder::class,
            LiquidityTableSeeder::class,
            MultiFamilyTableSeeder::class,
            OpenAccountTableSeeder::class,
            PortfolioTableSeeder::class,
            ResearchTableSeeder::class,
            StructuredProductTableSeeder::class,
        ]);
    }
}
