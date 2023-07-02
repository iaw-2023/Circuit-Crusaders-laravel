@extends('layouts.app')

@section('title', 'Reportes')

@section('css')
    <link href= https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css rel="stylesheet">
@endsection

@section('content')
    @if (!count($detalles) == 0)
        <table id="reporte" class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Nro. Pedido</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Codigo Detalle</th>
                    <th scope="col">Moto</th>
                    <th scope="col">Monto de detalle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detalles as $detalle)
                    <tr> 
                        <td>{{$pedidos->nro_pedido}}</td>
                        <td>{{$pedidos->fecha_pedido}}</td>
                        <td>{{$pedidos->cliente->email}}</td>
                        <td>{{$detalle->nro_detalle}}</td>
                        <td>{{$detalle->moto->marca}} {{$detalle->moto->modelo}} ({{$detalle->moto->estilo->nombre}})</td>
                        <td>${{$detalle->moto->monto}}</td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    @else
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody> 
                <td>{{$pedidos->nro_pedido}}</td>
                <td><p>No se encontraron detalles para el pedido.</p></td>    
            </tbody>
        </table>
    @endif
    
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function () {
        $('#reporte').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
        });
    });
    </script>
    @endsection

@endsection