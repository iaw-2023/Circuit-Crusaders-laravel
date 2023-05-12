@extends('layouts.app')

@section('title', 'Reportes por fecha')

@section('content')
    <h2>BUSCAR PEDIDOS POR FECHA</h2>

    <form action="{{ route('estilos.update', $estilo->nro_estilo) }}" method="POST">
        @csrf    
        @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estilo->nombre}}">    
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Final</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estilo->nombre}}">    
    </div>
    <a href="{{ route('reportes.index') }}" class="btn btn-secondary">VOLVER</a>
    </form> 
@endsection