<?php

namespace App\Http\Livewire\Components;

use App\Models\Course;
use Livewire\Component;

class Navbar extends Component
{

    public $courses, $searchInput;

    protected $queryString = [
        // 'categoryInput' => ['except' => '', 'as' => 'category'],
        'searchInput' => ['except' => '']
    ];

    public function render()
    {

        // $this->courses = Course::with(['mentor','reviews', 'category', 'chapters', 'chapters.lessons'])->get();

        if ($this->searchInput) {
            $this->courses = Course::with(['mentor', 'category', 'chapters', 'chapters.lessons'])
                ->where('name', 'like', '%' . $this->searchInput . '%')
                ->get();
        } else {
            $this->courses = Course::with(['mentor', 'category', 'chapters', 'chapters.lessons'])->get();
        }

        // dd($this->courses);
        return view('livewire.components.navbar');
    }
}
