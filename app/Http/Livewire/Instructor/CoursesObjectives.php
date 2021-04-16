<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use App\Models\Objective;
use Livewire\Component;

class CoursesObjectives extends Component
{

    public $course, $objective, $general;

    protected $rules = [
        'objective.general' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->objective = new Objective();
    }

    public function render()
    {
        return view('livewire.instructor.courses-objectives');
    }

    public function store(){

        $this->validate([
            'general' => 'required'
        ]);

        $this->course->objectives()->create([
            'general' => $this->general
        ]);

        $this->reset('general');
        $this->course = Course::find($this->course->id);
    }

    public function edit(Objective $objective){
        $this->objective = $objective;
    }

    public function update(){
        $this->validate();        
        $this->objective->save();
        $this->objective = new Objective();

        $this->course = Course::find($this->course->id);
    }

    public function destroy(Objective $objective){
        $objective->delete();

        $this->course = Course::find($this->course->id);
    }

}
