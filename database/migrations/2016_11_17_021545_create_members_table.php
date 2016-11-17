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
            $table->string('family_name')->nullable();//派号
            $table->integer('generation')->nullable();//代
            $table->integer('gender');
            $table->dateTime('birthday')->nullable();
            $table->string('birth_year')->nullable();//农历
            $table->string('birth_month')->nullable();
            $table->string('birth_date')->nullable();//农历
            $table->string('birthplace')->nullable();
            $table->dateTime('death_date')->nullable();//公历
            $table->string('death_year')->nullable();//农历
            $table->string('death_month')->nullable();//农历
            $table->string('death_day')->nullable();//农历
            $table->string('death_place')->nullable();
            $table->integer('death_day')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('couple')->nullable();//配偶
            $table->string('resume')->nullable();
            $table->string('note')->nullable();//编者注

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
