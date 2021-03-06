<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTissueTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tissue_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('tissue_type_id')->unsigned()->nullable();
            $table->text('description');
            $table->jsonb('cache')->nullable();
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
        Schema::dropIfExists('tissue_types');
    }
}
