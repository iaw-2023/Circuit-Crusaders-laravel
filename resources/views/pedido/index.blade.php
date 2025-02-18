@extends('layouts.app')

@section('title', 'Pedidos')

@section('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="container p-3 my-5">
    <table id="ped" class="table table-dark table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cliente</th>
                <th scope="col">Reporte</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{$pedido->nro_pedido}}</td>
                <td>{{$pedido->fecha_pedido}}</td>
                <td>{{$pedido->cliente->email}}</td>
                <td><a href="{{ route("pedidos.reporte",$pedido->nro_pedido) }}" class="btn btn-info">Abrir detalles</a></td>
            </tr>
            @endforeach        
        </tbody>
    </table>
</div>
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#ped').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
            "responsive": true  // Activa la funcionalidad responsive
        });
    });
</script>
@endsection


@endsection