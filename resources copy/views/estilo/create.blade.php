@extends('layouts.app')


@section('content')
    <h1>Agregar estilo</h1>
    <form action="{{ route('estilos.store') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" required>    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" required>
      </div>     
      <a href="{{ route('estilos.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection