<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEntityType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('regex');
            $table->timestamps();
        });

        Schema::table('entities', function (Blueprint $table) {
            $table->integer('entity_type_id')->unsigned();
            $table->foreign('entity_type_id')
              ->references('id')->on('entity_types')
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
        Schema::table('entities', function (Blueprint $table) {
            $table->dropForeign('entities_entity_type_id_foreign');
            $table->dropColumn('entity_type_id');            
        });
        Schema::drop('entity_types');
    }
}
