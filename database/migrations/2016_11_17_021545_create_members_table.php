<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('uuid');//唯一id

            $table->string('family');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('family_name');//派号
            $table->integer('generation');//代
            $table->integer('gender');
            $table->dateTime('birthday');
            $table->string('birth_year');//农历
            $table->string('birth_month');
            $table->string('birth_date');//农历
            $table->string('birthplace');
            $table->dateTime('death_date');//公历
            $table->string('death_year');//农历
            $table->string('death_month');//农历
            $table->string('death_day');//农历
            $table->string('death_place');
            $table->integer('death_day');
            $table->string('father');
            $table->string('mother');
            $table->string('couple');//配偶
            $table->string('resume');
            $table->string('note');//编者注

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
