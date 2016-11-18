<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_families', function (Blueprint $table) {
            $table->increments('id');
            $table->string('family');
            $table->string('sub');
            $table->string('resume');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['family','sub']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_families');
    }
}
