<?php

use Illuminate\Database\Seeder;

class MutualFundPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mutual_fund_pages')->insert([
            'main' => '',
            'sub' => '',
            'banner' => '',
            'email' => '',
            'acct_name' => '',
            'acct_number' => '',
            'bank' => '',
            'fixed_income_fund' => '',
            'fixed_income_fund_image' => '',
            'fixed_income_fund_document' => '',
            'fixed_income_fund_document_faq' => '',
            'equity_fund' => '',
            'equity_fund_image' => '',
            'equity_fund_document' => '',
            'equity_fund_document_faq' => '',
            'money_market_fund' => '',
            'money_market_fund_image' => '',
            'money_market_fund_document' => '',
            'money_market_fund_document_faq' => '',
        ]);
    }
}
