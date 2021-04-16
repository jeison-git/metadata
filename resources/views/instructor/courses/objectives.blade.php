<x-instructor-layout :course="$course">    
    
    <div>
        @livewire('instructor.courses-objectives', ['course' => $course], key('courses-objectives' . $course->id))
    </div>

    <div class="my-8">
        @livewire('instructor.courses-specific-objectives', ['course' => $course], key('courses-specific-objectives' . $course->id))
    </div>

</x-instructor-layout>