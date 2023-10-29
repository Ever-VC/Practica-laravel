@extends('layout.base')

@section('content')
<div class="text-center">
    <h1>Gobierno de El Salvador</h1>
    <br><br>
    <h3>Universidad de El Salvador - FMO</h3>
    <p>{{$fecha}}</p>
    <br><br>
    <p><span class="fw-bold">Id:</span> #{{$proyecto->id}}</p>
    <p><span class="fw-bold">Nombre del proyecto:</span> {{$proyecto->NombreProyecto}}</p>
    <p><span class="fw-bold">Fuente de fondos:</span> {{$proyecto->fuenteFondos}}</p>
    <p><span class="fw-bold">Monto planificado:</span> ${{$proyecto->MontoPlanificado}}</p>
    <p><span class="fw-bold">Monto patrocinado:</span> ${{$proyecto->MontoPatrocinado}}</p>
    <p><span class="fw-bold">Monto de fondos propios:</span> ${{$proyecto->MontoFondosPropios}}</p>
</div>
@endsection
