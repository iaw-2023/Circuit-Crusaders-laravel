@extends('layouts.app')

@section('css')
    <link href= https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css rel="stylesheet">
@endsection

@section('content')
<table id="user" class="table table-dark table-striped mt-4">
    <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Rol</th>
          <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->rol}}</td>
            <td>
               
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>                  
               
        </td> 

        </tr>
        @endforeach

    </tbody>    
</table>   
<a href="users/create" class="btn btn-primary">Crear</a>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#user').DataTable({
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
    });
});
</script>
@endsection

@endsection