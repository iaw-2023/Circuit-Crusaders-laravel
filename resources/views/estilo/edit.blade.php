@extends('layouts.app')

@section('title', 'EDITAR ESTILOS-MOTOMAMI PAPA')

@section('content')
  <h2>EDITAR REGISTROS</h2>

  <form action="{{ route('estilos.update', $estilo->nro_estilo) }}" method="POST">
      @csrf    
      @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estilo->nombre}}">    
    </div>
    <div class="mb-3">
      <label for="" class="form-label">descripcion</label>
      <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estilo->descripcion}}">
    </div>
    <a href="{{ route('estilos.index') }}" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection