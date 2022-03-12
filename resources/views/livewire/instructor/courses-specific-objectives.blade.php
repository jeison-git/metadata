<section>
    <h1 class="text-xl font-bold md:text-2xl">OBJETIVOS ESPECÍFICOS DEL CURSO</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->specific_objectives as $item)
        <article class="mb-4 card">
            <div class="bg-gray-200 card-body">

                @if ($objective->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="objective.specific"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm">

                        @error('objective.specific')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                    </form>
                @else
                    <header class="flex justify-between">
                        <h1>{{ $item->specific }}</h1>
                        <div>
                            <i wire:click="edit({{ $item }})"
                                class="text-blue-500 cursor-pointer fas fa-edit"></i>
                            <i wire:click="destroy({{ $item }})"
                                class="text-red-500 cursor-pointer fas fa-trash"></i>
                        </div>
                    </header>
                @endif

            </div>
        </article>
    @endforeach

    <article class="card">
        <div class="bg-gray-200 card-body">
            <form wire:submit.prevent="store">
                <input wire:model="specific"
                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Agregar el objetivo specífico...">

                @error('specific')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

                <div class="flex justify-end mt-2">
                    <button type="submit" class="btn btn-primary">Agregar objetivo</button>
                </div>
            </form>
        </div>

    </article>

</section>
