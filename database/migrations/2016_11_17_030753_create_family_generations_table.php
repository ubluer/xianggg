<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyGenerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_generations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('family');
            $table->integer('sub_family');
            $table->integer('sort');
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['family','sort']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_generations');
    }
}
