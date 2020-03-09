<?php namespace Academy\Course\Components;

use Cms\Classes\ComponentBase;
use Model;
use Db;
use Input;


class CreateCourse extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Create Course',
            'description' => 'Add this to page to create form for new course'
        ];
    }


    public function onSaveCourse(){
        echo "string";
        $name = Input::get('name');
        $description = Input::get('description');
        $publisher = Input::get('publisher');
        $teacherName = Input::get('teacherName');
        $difficulty = Input::get('difficulty');

    $data = request()->only([
      'name',
      'publisher',
      'difficulty',
      'description',
      'teacher_name'
    ]);
Db::table('academy_course_courses')->insert($data);    }

    public function defineProperties()
    {
        return [];
    }
}
