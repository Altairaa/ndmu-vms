<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_number')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->integer('sport_id')->unsigned();
            $table->integer('semester_id')->unsigned();
            $table->string('Semester');
            $table->date('birth_date')->nullable();
            $table->string('gender');
            $table->string('course')->nullable();
            $table->integer('year')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('street')->nullable();
            $table->string('city_or_municipality')->nullable();
            $table->string('province')->nullable();
            $table->string('PE111')->nullable();
            $table->string('PE112')->nullable();
            $table->string('PE121')->nullable();
            $table->string('PE122')->nullable();
            $table->string('NSTP1')->nullable();
            $table->string('NSTP2')->nullable();
            $table->integer('contact_person_id')->unsigned();
            // $table->foreign('sport_id')->references('id')->on('sports')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('contact_person_id')->references('id')->on('ContactPersons')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
