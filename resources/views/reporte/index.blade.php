@extends('layouts.app')

@section('title', 'Reportes')

@section('content')
    <div>
        <h1>Reportes</h1>    
    </div>
    <div>
        <a class="btn btn-dark" href="{{ route("reportes.reporteFecha") }}" role="button">Reportes por fecha</a>
        <a class="btn btn-dark" href="{{ route("reportes.reporteCliente") }}" role="button">Reportes por clientes</a>
        <a class="btn btn-dark" href="{{ route("reportes.reportePedido") }}" role="button">Reportes por pedido</a>
    </div>
@endsection