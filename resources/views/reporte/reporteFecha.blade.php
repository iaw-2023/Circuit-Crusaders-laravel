@extends('layouts.app')

@section('title', 'Reportes por fecha')

@section('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="container p-3 my-5">

    <h2>BUSCAR PEDIDOS POR FECHA</h2>

    <form method="POST" action="{{ route('reportePorFecha') }}">
        @csrf
        <div class="form-group">
            <label for="fecha_inicio">Fecha de inicio:</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de fin:</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
        </div>
        <button type="submit" class="btn btn-primary">Buscar pedidos</button>
    </form>
    <h1>Pedidos dentro de las fechas indicadas</h1>
        <table id="rf" class="table table-dark table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Codigo de pedido</th>
                    <th scope="col">Detalle</th>    
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->fecha_pedido }}</td>
                        <td>{{ $pedido->cliente->nombre }} {{ $pedido->cliente->apellido }}</td>
                        <td>{{ $pedido->nro_pedido }}</td>
                        <td><a href="{{ route("abrirPedido",$pedido->nro_pedido) }}" class="btn btn-info">Abrir Detalles</a></td>
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
            $('#rf').DataTable({
                "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
                "responsive": true  // Activa la funcionalidad responsive
            });
        });
        </script>
        @endsection

@endsection