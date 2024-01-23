@extends('layouts.app')

@section('title', 'Reportes por clientes')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="container p-3 my-5">
    <h2>BUSCAR PEDIDOS POR CLIENTE</h2>

    <form method="POST" action="{{ route('reportePorCliente') }}">
        @csrf
        <div class="mb-3">
            <label for="mail" class="form-label">Correo electrónico del cliente:</label>
            <input type="email" name="mail" id="mail" class="form-control" required>
        </div>
        <button class="btn btn-primary" type="submit">Buscar pedidos</button>
    </form>

    @if (isset($error))
        <p class="mt-3">{{ $error }}</p>
    @elseif (isset($cliente) && isset($pedidos))
        <div class="mt-3">
            <h1>Pedidos de {{ $cliente->nombre }} {{ $cliente->apellido }}</h1>
            <p>Correo electrónico: {{ $cliente->email }}</p>
            <table id="rc" class="table table-dark table-striped nowrap" style="width:100%">
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
                            <td>{{ $pedido->nro_pedido }}</td>
                            <td>{{ $pedido->fecha_pedido }}</td>
                            <td><a href="{{ route("abrirPedido", $pedido->nro_pedido) }}" class="btn btn-info">Abrir Detalles</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#rc').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
            "responsive": true
        });
    });
</script>
@endsection

@endsection
