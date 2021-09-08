<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaEpisodios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodios', function(Blueprint $table){
            $table->tinyIncrements('id');
            $table->integer('temporada');
            $table->integer('numero');
            $table->boolean('assitido')->default(false);
            $table->integer('serie id');
            $table->foreign('serie id')
                ->references('series')
                ->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodios');
    }
}
