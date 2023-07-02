@extends('layouts.app')

@section('css')
    <link href= https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css rel="stylesheet">
@endsection

@section('content')
<table id="cliente" class="table table-dark table-striped mt-4">
    <thead>
        <tr>
          <th scope="col">Id Cliente </th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">Dni</th>
          <th scope="col">Email</th>
          <th scope="col">Fecha de nacimiento</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->nro_cliente}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->dni}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->fecha_nac}}</td>
        </tr>
        @endforeach

    </tbody>    
</table>   

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#cliente').DataTable({
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
    });
});
</script>
@endsection

@endsection