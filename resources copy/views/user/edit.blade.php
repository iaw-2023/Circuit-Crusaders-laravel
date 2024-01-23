@extends('layouts.app')


@section('content')
  <h2>Editar usuario</h2>

  <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf    
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}">
    </div>

    <div class="mb-3">
        <label for="rol" class="form-label">Rol</label>
        <select id="rol" name="rol" class="form-control">
            <option value="admin" {{$user->rol == 'admin' ? 'selected' : ''}}>Administrador</option>
            <option value="empleado" {{$user->rol == 'empleado' ? 'selected' : ''}}>Empleado</option>
        </select>
    </div>

    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection