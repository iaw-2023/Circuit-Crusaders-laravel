@extends('layouts.app')

@section('content')
<table class="table table-dark table-striped mt-4">
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

@endsection