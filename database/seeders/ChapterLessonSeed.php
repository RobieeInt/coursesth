<?php

namespace Database\Seeders;

use App\Models\Lessons;
use App\Models\Chapters;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChapterLessonSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapters = [
            [
                'course_id' => 1,
                'name' => 'Chapter 1',
                'slug' => 'chapter-1',
                'description' => 'Chapter 1',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 1,
                'name' => 'Chapter 2',
                'slug' => 'chapter-2',
                'description' => 'Chapter 2',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 1,
                'name' => 'Chapter 3',
                'slug' => 'chapter-3',
                'description' => 'Chapter 3',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 1,
                'name' => 'Chapter 4',
                'slug' => 'chapter-4',
                'description' => 'Chapter 4',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 1,
                'name' => 'Chapter 5',
                'slug' => 'chapter-5',
                'description' => 'Chapter 5',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 1,
                'name' => 'Chapter 6',
                'slug' => 'chapter-6',
                'description' => 'Chapter 6',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 1,
                'name' => 'Chapter 7',
                'slug' => 'chapter-7',
                'description' => 'Chapter 7',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Chapter 1',
                'slug' => 'chapter-1',
                'description' => 'Chapter 1',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Chapter 2',
                'slug' => 'chapter-2',
                'description' => 'Chapter 2',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Chapter 3',
                'slug' => 'chapter-3',
                'description' => 'Chapter 3',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Chapter 4',
                'slug' => 'chapter-4',
                'description' => 'Chapter 4',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Chapter 5',
                'slug' => 'chapter-5',
                'description' => 'Chapter 5',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Chapter 6',
                'slug' => 'chapter-6',
                'description' => 'Chapter 6',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'course_id' => 2,
                'name' => 'Chapter 7',
                'slug' => 'chapter-7',
                'description' => 'Chapter 7',
                'status' => 'draft',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
        ];

        $lessons = [
            [
                'chapter_id' => 1,
                'name' => 'Lesson 1',
                'slug' => 'lesson-1',
                'description' => 'Lesson 1',
                'video' => 'https://www.youtube.com/watch?v=AiUkEsrZ44o',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'chapter_id' => 1,
                'name' => 'Lesson 2',
                'slug' => 'lesson-2',
                'description' => 'Lesson 2',
                'video' => 'https://www.youtube.com/watch?v=AiUkEsrZ44o',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'chapter_id' => 1,
                'name' => 'Lesson 3',
                'slug' => 'lesson-3',
                'description' => 'Lesson 3',
                'video' => 'https://www.youtube.com/watch?v=AiUkEsrZ44o',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'chapter_id' => 1,
                'name' => 'Lesson 4',
                'slug' => 'lesson-4',
                'description' => 'Lesson 4',
                'video' => 'https://www.youtube.com/watch?v=AiUkEsrZ44o',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'chapter_id' => 1,
                'name' => 'Lesson 5',
                'slug' => 'lesson-5',
                'description' => 'Lesson 5',
                'video' => 'https://www.youtube.com/watch?v=AiUkEsrZ44o',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'chapter_id' => 1,
                'name' => 'Lesson 6',
                'slug' => 'lesson-6',
                'description' => 'Lesson 6',
                'video' => 'https://www.youtube.com/watch?v=AiUkEsrZ44o',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
        ];

        foreach ($chapters as $chapter) {
            Chapters::create($chapter);
        }

        foreach ($lessons as $lesson) {
            Lessons::create($lesson);
        }
    }
}
