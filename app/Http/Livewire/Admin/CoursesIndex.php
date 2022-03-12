<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;

class CoursesIndex extends Component
{
    use WithPagination;

   protected $paginationTheme = "bootstrap";

   public $search;

    public function render()
    {
        $courses = Course::where('status', '>', 1)
                    ->where('title', 'LIKE', '%' . $this->search . '%')
                    ->latest('id')
                    ->paginate(8);

        return view('livewire.admin.courses-index', compact('courses'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
