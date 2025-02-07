@extends('layouts.app')

@section('css')
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
@endsection

@section('content')
<div class="container p-3 my-5">
    <h2 class="mb-4 text-black">Información de la Moto</h2>

    @if(isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
    @else
        <div class="card mb-4 bg-dark text-white">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">{{ $moto['make'] ?? 'Desconocida' }} {{ $moto['model'] ?? 'Desconocido' }}</h1>
            </div>
            <div class="card-body bg-dark">
                <ul class="list-group">
                    <li class="list-group-item bg-dark text-white"><strong>Tipo:</strong> {{ $moto['type'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Desplazamiento:</strong> {{ $moto['displacement'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Motor:</strong> {{ $moto['engine'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Potencia:</strong> {{ $moto['power'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Torque:</strong> {{ $moto['torque'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Compresión:</strong> {{ $moto['compression'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Diámetro y carrera:</strong> {{ $moto['bore_stroke'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Válvulas por cilindro:</strong> {{ $moto['valves_per_cylinder'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Sistema de combustible:</strong> {{ $moto['fuel_system'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Control de combustible:</strong> {{ $moto['fuel_control'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Refrigeración:</strong> {{ $moto['cooling'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Caja de cambios:</strong> {{ $moto['gearbox'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Transmisión:</strong> {{ $moto['transmission'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Embrague:</strong> {{ $moto['clutch'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Chasis:</strong> {{ $moto['frame'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Suspensión delantera:</strong> {{ $moto['front_suspension'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Suspensión trasera:</strong> {{ $moto['rear_suspension'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Neumático delantero:</strong> {{ $moto['front_tire'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Neumático trasero:</strong> {{ $moto['rear_tire'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Frenos delanteros:</strong> {{ $moto['front_brakes'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Frenos traseros:</strong> {{ $moto['rear_brakes'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Peso total:</strong> {{ $moto['total_weight'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Altura del asiento:</strong> {{ $moto['seat_height'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Altura total:</strong> {{ $moto['total_height'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Longitud total:</strong> {{ $moto['total_length'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Ancho total:</strong> {{ $moto['total_width'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Despeje del suelo:</strong> {{ $moto['ground_clearance'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Distancia entre ejes:</strong> {{ $moto['wheelbase'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Capacidad de combustible:</strong> {{ $moto['fuel_capacity'] ?? 'N/A' }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Arranque:</strong> {{ $moto['starter'] ?? 'N/A' }}</li>
                </ul>
            </div>
        </div>
    @endif

    <a href="{{ route('motos.index') }}" class="btn btn-primary" tabindex="5">Volver al listado</a>
</div>
@endsection
