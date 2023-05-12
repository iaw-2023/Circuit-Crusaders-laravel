@extends('layouts.app')

@section('title', 'Reportes por clientes')

@section('content')
    <h2>BUSCAR PEDIDOS POR CLIENTE</h2>
        
    <label for="" class="form-label">E-mail cliente</label>
    <form method="POST" action="{{ route('reportePorCliente') }}">
        @csrf
        <label for="mail">Correo electrónico del cliente:</label>
        <input type="email" name="mail" id="mail" required>
        <button class="btn btn-primary" type="submit">Buscar pedidos</button>
    </form>
    @if (isset($error))
        <p>{{ $error }}</p>
    @elseif (isset($cliente) && isset($pedidos))
        <h1>Pedidos de {{ $cliente->nombre }} {{ $cliente->apellido }}</h1>
        <p>Correo electrónico: {{ $cliente->email }}</p>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Codigo de pedido</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Detalle</th>    
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{$pedido->nro_pedido}}</td>
                        <td>{{$pedido->fecha_pedido}}</td>
                        <td><a href="{{ route("abrirPedido",$pedido->nro_pedido) }}" class="btn btn-info">Abrir Detalles</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection