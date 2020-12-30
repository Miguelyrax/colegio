<?php

namespace Database\Seeders;

use App\Models\Asignature;
use App\Models\Course;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Portfolio;
use App\Models\Section;
use App\Models\Student;
use App\Models\Test;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $courses =  Course::factory(8)->create();
       foreach($courses as $course){
        Image::factory(1)->create([
            'imageable_id' => $course->id,
            'imageable_type' => 'App\Models\Course'
           ]);
           Student::factory(20)->create([
               'course_id' => $course->id, 
           ]);
          $asignatures =  Asignature::factory(6)->create([
              'course_id' => $course->id,
          ]);
          foreach($asignatures as $asignature){

            Test::factory(4)->create([
                'asignature_id' => $asignature->id,
            ]);

              $sections = Section::factory(4)->create([
                  'asignature_id' => $asignature->id,
              ]);
                foreach($sections as $section){
                   $lessons =  Lesson::factory(4)->create([
                        'section_id' => $section->id,
                    ]);
                    foreach($lessons as $lesson){
                        Portfolio::factory(4)->create([
                            'lesson_id' => $lesson->id,
                        ]);
                    }
                }
              
          }
       }
    }
}
