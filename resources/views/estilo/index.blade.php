@extends('layouts.base')

@section('contenido')
    <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div>
    <a href="estilo/create" class="btn btn-primary">CREAR</a>


    <table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
        </tr>
    </thead>
    <tbody> 
        @foreach ($estilos as $estilo)
        <tr>
            <td>
                {{$estilo->id}}
            </td>
            <td>
                {{$estilo->descripcion}}
            </td>
            <td>
                <!--<form action="{{ route('articulos.destroy',$estilo->id) }}" method="POST">
                    <a href="/estilo/{{$estilo->id}}/edit" class="btn btn-info">Edit</a>         
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>-->          
            </td>        
        </tr>
        @endforeach        
    </tbody>
    </table>
@endsection