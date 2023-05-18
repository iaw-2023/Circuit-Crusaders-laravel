@extends('layouts.app')

@section('title', 'Reportes')

@section('content')
    @if (!count($detalles) == 0)
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Detalle</th>
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
                        <td>${{$detalle->monto}}</td>
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
@endsection