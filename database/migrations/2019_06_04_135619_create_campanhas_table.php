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
            $table->string('titulo')->notNull();
            $table->text('descricao')->notNull();
            $table->decimal('vlr_meta')->notNull();
            $table->decimal('vlr_atingido');
            $table->dateTime('dt_final')->notNull();
            $table->string('img')->notNull();
            $table->string('link_video');
            $table->tinyInteger('flg_ativo')->default(1)->nullable();

            $table->unsignedInteger('categoria_id');

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
