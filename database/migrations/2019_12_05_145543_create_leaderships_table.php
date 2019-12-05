<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaderships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('role');
            $table->text('description');
            $table->text('image_path');
            $table->string('ranking');
            $table->text('linkedin');
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
        Schema::dropIfExists('leaderships');
    }
}
