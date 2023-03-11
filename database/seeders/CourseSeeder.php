<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $course = [
            [
                'mentor_id' => 1,
                'category_id' => 7,
                'name' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
                'status' => 'draft',
                'image' => 'laravel.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'mentor_id' => 1,
                'category_id' => 7,
                'name' => 'Vue',
                'slug' => 'vue',
                'description' => 'Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications.',
                'status' => 'draft',
                'image' => 'vue.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'mentor_id' => 1,
                'category_id' => 7,
                'name' => 'React',
                'slug' => 'react',
                'description' => 'React is a JavaScript library for building user interfaces. It is maintained by Facebook and a community of individual developers and companies.',
                'status' => 'draft',
                'image' => 'react.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'mentor_id' => 1,
                'category_id' => 7,
                'name' => 'Angular',
                'slug' => 'angular',
                'description' => 'Angular is a TypeScript-based open-source web application framework led by the Angular Team at Google and by a community of individuals and corporations.',
                'status' => 'draft',
                'image' => 'angular.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'mentor_id' => 1,
                'category_id' => 7,
                'name' => 'Bootstrap',
                'slug' => 'bootstrap',
                'description' => 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation and other interface components.',
                'status' => 'draft',
                'image' => 'bootstrap.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
        ];

        $courseBenefits = [
            [
                'course_id' => 1,
                'name' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
                'status' => 'active',
                'image' => 'laravel.png',
                'icon' => 'laravel.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Vue',
                'slug' => 'vue',
                'description' => 'Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications.',
                'status' => 'active',
                'image' => 'vue.png',
                'icon' => 'vue.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 3,
                'name' => 'React',
                'slug' => 'react',
                'description' => 'React is a JavaScript library for building user interfaces. It is maintained by Facebook and a community of individual developers and companies.',
                'status' => 'active',
                'image' => 'react.png',
                'icon' => 'react.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 4,
                'name' => 'Angular',
                'slug' => 'angular',
                'description' => 'Angular is a TypeScript-based open-source web application framework led by the Angular Team at Google and by a community of individuals and corporations.',
                'status' => 'active',
                'image' => 'angular.png',
                'icon' => 'angular.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
        ];

        //foreach
        foreach ($course as $key => $value) {
            \App\Models\Course::create($value);
        }

        foreach ($courseBenefits as $key => $value) {
            \App\Models\CourseBenefits::create($value);
        }

    }
}
