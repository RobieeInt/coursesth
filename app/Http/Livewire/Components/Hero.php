<?php

namespace App\Http\Livewire\Components;

use App\Models\Course;
use Livewire\Component;

class Hero extends Component
{
    public $courses;
    public function render()
    {
        $this->courses = Course::with(['mentor', 'category', 'chapters', 'chapters.lessons'])->get();
        return view('livewire.components.hero');
    }
}
