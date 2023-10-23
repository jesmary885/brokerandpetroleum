@extends('adminlte::page')

@section('title', 'BROKERPREMIUM')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('messages.panel')}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('oficina.index')}}">{{__('messages.panel')}}</a></li>
                        <li class="breadcrumb-item active">{{__('messages.inicio')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')



<div class="container-fluid">
    <h2 class="font-semibold text-lg text-gray-700 mb-6">Bienvenido, {{$user->name}}</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Mis solicitudes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if ($solicitudes->count())
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                    <th class="text-center">Nro</th>
                                    <th class="text-center">Fecha</th>
                                    <th class="text-center">Tipo</th>
                                    <th class="text-center">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <td class=" py-2 text-center">
                                            {{$solicitud->id}} 
                                        </td>
                                        <td class= py-2 text-center">
                                            {{$solicitud->created_at}}
                                        </td>
                                        <td class= py-2 text-center">
                                            {{$solicitud->tipo_solicitud}}
                                        </td>

                                        <td class= py-2 text-center">
                                            {{$solicitud->status}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="card-body">
                            <strong>No hay registros</strong>
                        </div>
                    @endif
                
                </div>
                <div class="card-footer clearfix">
              
                    <a href="{{route('oficina.solicitudes')}}" class="btn btn-sm btn-secondary float-right">Ver detalles</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Mis negociaciones</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if ($negociaciones->count())
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                    <th class="text-center">Nro</th>
                                    <th class="text-center">Fecha</th>
                                    <th class="text-center">Fase actual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($negociaciones as $negociacion)
                                    <tr>
                                        <td class="  py-2 text-center">
                                            {{$negociacion->id}} 
                                        </td>
                                        <td class="py-2 text-center">
                                            {{$negociacion->created_at}}
                                        </td>

                                        <td class=" py-2 text-center">
                                            {{$negociacion->fase->name}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="card-body">
                            <strong>No hay registros</strong>
                        </div>
                    @endif
                
                </div>
                <div class="card-footer clearfix">
              
                    <a href="{{route('oficina.negociaciones')}}" class="btn btn-sm btn-secondary float-right">Ver detalles</a>
                </div>
            </div>
        </div>

    </div>


</div>

    





@stop

@section('css')


 
@stop


@section('js')


@stop