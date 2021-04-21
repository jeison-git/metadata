<div class="mb-4">{{--Este es el formulario que solicita los datos del curso--}}
    {!! Form::label('title', 'Titulo del curso: ') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('title') ? ' border-red-600' : '') ]) !!}

@error('title')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror

</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso: ') !!}
    {!! Form::text('slug', null, ['readonly'=> 'readonly', 'class' => 'form-input block w-full mt-1' . ($errors->has('slug') ? ' border-red-600' : '')]) !!}

@error('slug')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror

</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtítulo  del curso: ') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : '')]) !!}

@error('subtitle')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror

</div>



<div class="grid grid-cols-2 gap-4">
        <div>
        {!! Form::label('day_id', 'Dia disponible para dictar conferencia virtual') !!}
        {!! Form::select('day_id', $days, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>

    <div>
        {!! Form::label('hour', 'Hora disponible para dictar conferencia virtual: ') !!}
        {!! Form::time('hour', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('hour') ? ' border-red-600' : '')]) !!}
    
    @error('hour')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror    
    </div>
</div>

<div class="my-4">
    {!! Form::label('description', 'Descripción del curso: ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('description') ? ' border-red-600' : '')]) !!}

</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>  
    
    <div>
        {!! Form::label('level_id', 'Niveles') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>  
    
    <div>
        {!! Form::label('price_id', 'Precio') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>                    
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
             <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">        
         @else
             <img id="picture" class="w-full h-64 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/12/22/04/00/edit-1103599__340.png" alt="">     
         @endisset
    </figure>
    <div>
        <p class="mb-2 text-justify">Carga la imagen de tu curso aquí. Para ser aceptada, debe cumplir nuestros estándares de calidad para las imágenes de los cursos. Directrices importantes: 750 x 422 pixeles; formato .jpg, .jpeg, .gif o .png; y sin texto en la imagen.</p>
        {!! Form::file('file', ['class' => 'form-input w-full' . ($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}
        @error('file')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
</div>