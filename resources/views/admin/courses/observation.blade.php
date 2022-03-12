@extends('adminlte::page')

@section('title', 'Observation')

@section('content_header')
    <h1 class="">Observaciones de la información para el curso: {{$course->title}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => ['admin.courses.reject', $course]]) !!}
                <div class="form-group">
                    {!! Form::label('body', 'Observaciones de la información/curso') !!}
                    {!! Form::textarea('body', null) !!}

                    @error('body')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror

                </div>
                 {!! Form::submit('Rechazar información/curso', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
        console.error( error );
    } );
    </script>
@stop
