@extends('layouts.app')

@section('title', 'createmoto')

@section('content')

    <h1>Agregar moto</h1>
    <form action="{{ route('motos.store') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="text" class="form-control" tabindex="1" required>    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Modelo</label>
        <input id="modelo" name="modelo" type="text" class="form-control" tabindex="2" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Anio</label>
        <input id="anio" name="anio" type="number" class="form-control" tabindex="3" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Cilindrada</label>
        <input id="cilindrada" name="cilindrada" type="text"  class="form-control" tabindex="3" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Patente</label>
        <input id="patente" name="patente" type="text"  class="form-control" tabindex="3" required>
      </div>
      <div class="mb-3">
        <label for="id_estilo">Estilo:</label>
          <select class="form-control" id="id_estilo" name="id_estilo" >
              @foreach($estilos as $estilo)
                  <option value="{{ $estilo->nro_estilo }}">{{ $estilo->nombre }}</option>  
              @endforeach
          </select required>
      </div>

      <a href="{{ route('motos.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection