@extends('layouts.app')

@section('css')
    <link href= https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css rel="stylesheet">
@endsection
@section('content')
    
    <table id= "estilos"class="table table-dark table-striped mt-4">
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
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
        $('#estilos').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
        });
    });
    </script>
    @endsection
@endsection