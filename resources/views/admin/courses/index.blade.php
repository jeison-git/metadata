@extends('adminlte::page')

@section('title', 'MetaData')

@section('content_header')
    <h1>Información de Cursos por Aprobar</h1>
@stop

@section('content')

@livewire('admin.courses-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
