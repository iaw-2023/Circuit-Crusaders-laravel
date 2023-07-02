@extends('layouts.app')


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
        <label for="" class="form-label">Año</label>
        <input id="anio" name="anio" type="number" class="form-control" tabindex="3" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Cilindrada</label>
        <select class="form-control" id="cilindrada" name="cilindrada" >
          <option value="110 cc" selected >110 cc</option>
          <option value="125 cc">125 cc</option>
          <option value="150 cc">150 cc</option>
          <option value="200 cc">200 cc</option>
          <option value="250 cc">250 cc</option>
          <option value="300 cc">300 cc</option>
          <option value="350 cc">350 cc</option>
          <option value="400 cc">400 cc</option>
          <option value="500 cc">500 cc</option>
          <option value="600 cc">600 cc</option>
          <option value="650 cc">650 cc</option>
          <option value="700 cc">700 cc</option>
          <option value="750 cc">750 cc</option>
          <option value="800 cc">800 cc</option>
          <option value="900 cc">900 cc</option>
          <option value="1100 cc">1100 cc</option>
          <option value="1200 cc">1200 cc</option>
          <option value="1500 cc">1500 cc</option>
        </select required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Patente</label>
        <input id="patente" name="patente" type="text"  class="form-control" tabindex="3" required>
      </div>
      <div class="mb-3">
        <label for="id_estilo">Estilo:</label>
          <select class="form-control" id="id_estilo" name="id_estilo" >
            @foreach($estilos as $index => $estilo)
              <option value="{{ $estilo->nro_estilo }}" {{ $index == 0 ? 'selected' : '' }}>
                  {{ $estilo->nombre }}
              </option>  
            @endforeach
          </select required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Costo</label>
        <input id="monto" name="monto" type="number" min="0" step="0.01" class="form-control" tabindex="3" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Imagen</label>
        <input id="foto_url" name="foto_url" type="text" class="form-control" tabindex="1" required>    
      </div>

      <a href="{{ route('motos.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection