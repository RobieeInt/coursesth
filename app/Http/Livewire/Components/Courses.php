<?php

namespace App\Http\Livewire\Components;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{

    public $courses;

    // public function mount($courses)
    // {
    //     $this->courses = $courses;
    // }
    public function render()
    {
        //get courses. join with users,category, mentor, chapter, and lessons
        $this->courses = Course::with(['mentor', 'category', 'chapters', 'chapters.lessons'])->get();
        // dd($this->courses);
        //dd chapters.lessons and count
        // dd($this->courses[0]->chapters[0]->lessons->count());
        return view('livewire.components.courses');
    }
}
