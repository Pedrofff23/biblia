<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * FOI CRIADO USANDO O COMANDO
 * php artisan make:migration add_idioma_id_on_livros --table=livros
 * isso serve para adicionar uma chave estrangeira a uma tabela ja existente
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livros', function (Blueprint $table) {

            $table->unsignedBigInteger('versao_id')->nullable();

            $table->foreign('versao_id')->references('id')->on('versoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livros', function (Blueprint $table) {
            //SE ALGO DER ERRADO E PRECISA DROPAR A COLUNA
            //LEMBRAR Q PRECISA ADICIONAR ISSO NA MAO
            $table->dropColumn('versao_id');
        });
    }
};
