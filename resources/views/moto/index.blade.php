@extends('layouts.base')

@section('title', 'INDEX DE MOTOMAMI PAPA')

@section('content')
<a href="moto/create" class = "btn btn-primary"> Crear </a>
<table class="table table-dark table striped mt-4">
    <thead>
        <tr>
          <th scope="col">Id </th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Anio</th>
          <th scope="col">Cilindrada</th>
          <th scope="col">Patente</th>
          <th scope="col">Id_detalle</th>
          <th scope="col">Id_estilo</th>

        </tr>
    </thead>
    <tbody>
        @foreach($motos as $moto)
        <tr>
            <td>{{$moto->nro_moto}}</td>
            <td>{{$moto->marca}}</td>
            <td>{{$moto->modelo}}</td>
            <td>{{$moto->anio}}</td>
            <td>{{$moto->cilindrada}}</td>
            <td>{{$moto->patente}}</td>
            <td>{{$moto->id_detalle}}</td>
            <td>{{$moto->id_estilo}}</td>
            <td>
                <a href="moto/edit" class = "btn btn-info"> Editar </a>
                <button class = "btn btn-danger"> Borrar </button>

            </td>

        </tr>
        @endforeach
    </tbody>    
</table>    
@endsection