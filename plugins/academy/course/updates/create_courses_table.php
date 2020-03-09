<?php namespace Academy\Course\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('academy_course_courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();
            $table->increments('ID');
            $table->string('name');
            $table->string('publisher');
            $table->string('difficulty');
            $table->string('description');
            $table->string('teacher_name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('academy_course_courses');
    }
}
