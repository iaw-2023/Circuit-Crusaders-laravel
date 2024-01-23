@extends('layouts.app')
@section('title', 'Clientes')


@section('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="container p-3 my-5">
    <table id="cliente" class="table table-dark table-striped nowrap" style="width:100%">
        <thead>
            <tr>
            <th scope="col">Id Cliente </th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->nro_cliente}}</td>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->email}}</td>
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
        $('#cliente').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
            "responsive": true  // Activa la funcionalidad responsive

        });
    });
</script>
@endsection

@endsection