@extends('layouts.app')

@section('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="container p-3 my-5">
    <table id="motos" class="table table-dark table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Id </th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Año</th>
                <th scope="col">Cilindrada</th>
                <th scope="col">Patente</th>
                <th scope="col">Costo</th>
                <th scope="col">Estilo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($motos as $moto)
            <tr>
                <td>{{$moto->nro_moto}}</td>
                <td>{{$moto->marca}}</td>
                <td>{{$moto->modelo}}</td>
                <td>{{$moto->anio}}</td>
                <td>{{$moto->cilindrada}}</td>
                <td>{{$moto->patente}}</td>
                <td>${{$moto->monto}}</td>
                <td>{{$moto->estilo->nombre}}</td>
                <td>
                    <form action="{{ route('motos.destroy',$moto->nro_moto) }}" method="POST">
                        <a href="{{ route('motos.edit',$moto->nro_moto) }}" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="motos/create" class="btn btn-primary">Crear</a>
    <div id="api-info"></div> <!-- Nuevo div para mostrar la información de la API -->
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
        $('#motos').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
            "responsive": true  // Activa la funcionalidad responsive

        });
    });
</script>
@endsection
