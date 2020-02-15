<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableObras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',60);
            $table->longText('sobre');
            $table->decimal('preco',9,2);
            $table->string('tamanho',60);
            $table->date('data_criacao')->nullable();
            $table->integer('estoque');
            $table->string('foto')->nullabe();
            $table->unsignedBigInteger('artista_id');
            $table->unsignedBigInteger('estilo_id');
            $table->unsignedBigInteger('categoria_id');
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
        Schema::dropIfExists('obras');
    }
}
