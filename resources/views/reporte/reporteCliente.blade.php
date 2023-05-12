@extends('layouts.app')

@section('title', 'Reportes por clientes')

@section('content')
    <h2>BUSCAR PEDIDOS POR CLIENTE</h2>
        
    <label for="" class="form-label">E-mail cliente</label>
    <form action="{{ route('estilos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input id="mail" name="mail" type="text" class="form-control" placeholder="Ingredar e-mail del cliente" aria-label="E-mail" aria-describedby="basic-addon2" required>
                <!--<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">@gmail.com</a></li>
                    <li><a class="dropdown-item" href="#">@hotmail.com</a></li>
                    <li><a class="dropdown-item" href="#">@outlook.com</a></li>
                </ul>-->    
        </div>    
        <a href="{{ route('estilos.index') }}" class="btn btn-secondary" tabindex="5">BUSCAR</a>
    </form>   
    
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">E-mail</th>
                <th scope="col">Pedido</th>    
            </tr>
        </thead>
        <tbody> 
                
        </tbody>
    </table>        
@endsection