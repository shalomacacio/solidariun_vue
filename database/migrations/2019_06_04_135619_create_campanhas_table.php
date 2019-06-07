<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanhas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('titulo')->nullable();
            $table->text('descricao')->nullable();
            $table->decimal('vlr_meta')->nullable();
            $table->decimal('vlr_atingido')->nullable()->default(0);
            $table->string('dt_final')->nullable();
            $table->string('img')->nullable();
            $table->string('link_video')->nullable();
            $table->tinyInteger('flg_ativo')->default(1);

            $table->string('categoria_id')->nullable();

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
        Schema::dropIfExists('campanhas');
    }
}
