<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('livros', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('tema_id');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->integer('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->bigInteger('isbn')->nullable();
            $table->string('titulo');
            $table->integer('edicao')->nullable();
            $table->integer('ano')->nullable();
            $table->integer('paginas')->nullable();
            $table->string('editora')->nullable();
            $table->string('autor');
            $table->string('imagem')->nullable();
            $table->boolean('validado');
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
		Schema::drop('livros');
	}

}
