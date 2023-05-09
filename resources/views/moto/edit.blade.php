@extends('layouts.app')

@section('title', 'INDEX DE MOTOMAMI PAPA')

@section('content')
<h2>EDITAR REGISTROS</h2>

<form action="{{ route('motos.update', $moto->nro_moto) }}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Marca</label>
    <input id="marca" name="marca" type="text" class="form-control" value="{{$moto->marca}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Modelo</label>
    <input id="modelo" name="modelo" type="text" class="form-control" value="{{$moto->modelo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Anio</label>
    <input id="anio" name="anio" type="number" class="form-control" value="{{$moto->anio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cilindrada</label>
    <input id="cilindrada" name="cilindrada" type="text" step="any" class="form-control" value="{{$moto->cilindrada}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Patente</label>
    <input id="patente" name="patente" type="text" step="any" class="form-control" value="{{$moto->patente}}">
  </div>
  <div class="mb-3">
    <label for="id_estilo">Estilo:</label>
      <select class="form-control" id="id_estilo" name="id_estilo" >
          @foreach($estilos as $estilo)
              <option value="{{ $estilo->nro_estilo }}">{{ $estilo->nombre }}</option>  
          @endforeach
      </select required>
  </div>
  <a href="{{ route('motos.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection