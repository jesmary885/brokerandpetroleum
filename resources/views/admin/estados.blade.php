@extends('adminlte::page')
@section('content_header')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Estados de procesos y/o documentos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('oficina.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Estados de procesos y/o documentos</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@stop

@section('content')
    @livewire('admin.estados-documentos-procesos') 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop