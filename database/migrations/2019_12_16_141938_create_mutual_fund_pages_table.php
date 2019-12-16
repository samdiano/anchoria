<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutualFundPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutual_fund_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('banner');
            $table->text('main');
            $table->text('sub');
            $table->text('email');
            $table->text('acct_name');
            $table->text('acct_number');
            $table->text('bank');
            $table->text('fixed_income_fund');
            $table->text('fixed_income_fund_image');
            $table->text('fixed_income_fund_document');
            $table->text('fixed_income_fund_document_faq');
            $table->text('equity_fund');
            $table->text('equity_fund_image');
            $table->text('equity_fund_document');
            $table->text('equity_fund_document_faq');
            $table->text('money_market_fund');
            $table->text('money_market_fund_image');
            $table->text('money_market_fund_document');
            $table->text('money_market_fund_document_faq');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutual_fund_pages');
    }
}
