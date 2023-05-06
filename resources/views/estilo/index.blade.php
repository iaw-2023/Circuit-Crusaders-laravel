@extends('layouts.app')

@section('title', 'INDEX DE ESTILO-MOTOMAMI PAPA')

@section('content')
    
    <table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody> 
        @foreach ($estilos as $estilo)
        <tr>
            <td>{{$estilo->nro_estilo}}</td>
            <td>{{$estilo->nombre}}</td>
            <td>{{$estilo->descripcion}}</td>
            <td>
               
                    <form action="{{ route('estilos.destroy',$estilo->nro_estilo) }}" method="POST">
                        <a href="{{ route('estilos.edit',$estilo->nro_estilo) }}" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>                    
                   
            </td>      
        </tr>
        @endforeach        
    </tbody>
    </table>
    <a href="estilos/create" class="btn btn-primary">Crear</a>
@endsection