<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Lesson;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Http\Request;

class CoursesLesson extends Component
{

    public $section, $lesson, $name, $contents;

    protected $rules = [
        'lesson.name' => 'required',
        'lesson.contents' => 'required',
        
    ];

    public function mount(Section $section){
        $this->section = $section;

        $this->lesson = new Lesson();
    }

    public function render()
    {
        return view('livewire.instructor.courses-lesson')->layout('layouts.instructor', ['section' => $this->section]);;
    }

    public function store(){

        $this->validate([
            'name' => 'required',
            'contents' => 'required',
        ]);             
       
        Lesson::create([
            'name' => $this->name,
            'contents' => $this->contents,
            'section_id' => $this->section->id
        ]);

        $this->reset(['name', 'contents']);
        $this->section = Section::find($this->section->id);        
    }

    public function edit(Lesson $lesson){

        $this->lesson = $lesson;
        
    }

    public function update(){
      
       $this->validate();

        $this->lesson->save();
        $this->lesson = new Lesson();
        $this->section = Section::find($this->section->id);

    }

    public function destroy(Lesson $lesson){
        $lesson->delete();
        $this->section = Section::find($this->section->id);
    }

    public function cancel(){
        $this->lesson = new Lesson();
    }
    
}
