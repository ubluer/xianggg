<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');

            $table->string('family');
            $table->string('branch')->nullable()->comment('分支');
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('name')->nullable();
            $table->string('family_name')->nullable()->comment('派字');
            $table->string('generation_name')->nullable();
            $table->integer('generation')->nullable()->comment('代');//代
            $table->integer('gender')->nullable()->comment('1：男，0：女');
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
            $table->integer('father_id')->nullable();
            $table->integer('mother_id')->nullable();
            $table->string('order')->nullable()->comment('在弟兄里的排行');
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
