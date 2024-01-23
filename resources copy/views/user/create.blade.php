@extends('layouts.app')


@section('content')
    <h1>Agregar usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" required>    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Correo electronico</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="2" required>
      </div>  
      <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" tabindex="2" required>
      </div>       
      <div class="mb-3">
        <label for="" class="form-label">Rol</label>
        <select id="rol" name="rol" class="form-control" tabindex="4" required>
            <option value="admin">Administrador</option>
            <option value="empleado">Empleado</option>
        </select>
    </div>
      <a href="{{ route('users.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection