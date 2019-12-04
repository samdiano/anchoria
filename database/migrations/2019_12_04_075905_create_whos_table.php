<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('hero');
            $table->string('quote');
            $table->text('vision');
            $table->text('mission');
            $table->text('integrity');
            $table->text('client_focus');
            $table->text('leadership');
            $table->text('collaboration');
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
        Schema::dropIfExists('whos');
    }
}
