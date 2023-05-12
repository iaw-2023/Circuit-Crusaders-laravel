@extends('layouts.app')

@section('title', 'Reportes por pedidos')

@section('content')
    <h2>BUSCAR PEDIDOS POR FECHA</h2>

    <form action="{{ route('estilos.update', $estilo->nro_estilo) }}" method="POST">
        @csrf    
        @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Id Pedido</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estilo->nombre}}">    
    </div>
    <a href="{{ route('reportes.index') }}" class="btn btn-secondary">VOLVER</a>
    </form>
@endsection