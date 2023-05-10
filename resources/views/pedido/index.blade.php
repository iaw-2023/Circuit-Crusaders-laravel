@extends('layouts.app')

@section('title', 'Pedidos')

@section('content')
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cliente</th>
                <th scope="col">Reporte</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{$pedido->nro_pedido}}</td>
                <td>{{$pedido->fecha_pedido}}</td>
                <td>{{$pedido->id_cliente}}</td>
                <td><a href="{{ route("pedidos.reporte",$pedido->nro_pedido) }}" class="btn btn-info">Abrir Reporte</a></td>
                <td><a href="{{ route("pedidos.reportePDF",$pedido->nro_pedido) }}" class="btn btn-info">Generar Reporte</a></td>
            </tr>
            @endforeach        
        </tbody>
    </table>
@endsection