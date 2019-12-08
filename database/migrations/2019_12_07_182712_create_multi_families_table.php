<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('main');
            $table->text('sub');
            $table->text('banner');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('side_text');
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
        Schema::dropIfExists('multi_families');
    }
}
