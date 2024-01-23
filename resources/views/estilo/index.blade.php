@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<style>
    .dataTables_wrapper .dataTables_scroll .dataTables_scrollBody {
        overflow: auto !important;
    }
</style>
@endsection

@section('content')
<div class="container p-3 my-5">    
    <table id="estilos" class="table table-dark table-striped mt-4 nowrap">
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
                    <form action="{{ route('estilos.destroy', $estilo->nro_estilo) }}" method="POST">
                        <a href="{{ route('estilos.edit', $estilo->nro_estilo) }}" class="btn btn-info">Editar</a>
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
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#estilos').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
            "responsive": true,
            "columnDefs": [
                { "targets": 2, "render": $.fn.dataTable.render.ellipsis(50) }
            ]
        });
    });
</script>
@endsection
