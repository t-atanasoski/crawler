<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_entities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->integer('entity_id')->unsigned();
            $table->enum('types', ['list', 'details'])->default('details');
            $table->timestamps();
            $table->foreign('page_id')
              ->references('id')->on('pages')
              ->onDelete('cascade');
            $table->foreign('entity_id')
              ->references('id')->on('entities')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page_entities');
    }
}
