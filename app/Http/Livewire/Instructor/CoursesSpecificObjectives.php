<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use App\Models\SpecificObjective;
use Livewire\Component;

class CoursesSpecificObjectives extends Component
{

    public $course, $objective, $specific;

    protected $rules = [
        'objective.specific' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->objective = new SpecificObjective();
    }

    public function render()
    {
        return view('livewire.instructor.courses-specific-objectives');
    }

    public function store(){

        $this->validate([
            'specific' => 'required'
        ]);

        $this->course->specific_objectives()->create([
            'specific' => $this->specific
        ]);

        $this->reset('specific');
        $this->course = Course::find($this->course->id);
    }

    public function edit(SpecificObjective $objective){
        $this->objective = $objective;
    }

    public function update(){
        $this->validate();        
        $this->objective->save();
        $this->objective = new SpecificObjective();

        $this->course = Course::find($this->course->id);
    }

    public function destroy(SpecificObjective $objective){
        $objective->delete();

        $this->course = Course::find($this->course->id);
    }

}