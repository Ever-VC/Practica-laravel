@extends('layout.base')

@section('content')
<div class="row">
    <div class="col-12 mt-3">
        <div>
            <h2>Crear Proyecto</h2>
        </div>
        <div>
            <a href="{{route('proyectos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <strong>Error:</strong> Parece que algo salio mal..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('proyectos.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre del proyecto:</strong>
                    <input type="text" name="NombreProyecto" class="form-control" placeholder="Nombre..." >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fuente de los fondos:</strong>
                    <input type="text" name="fuenteFondos" class="form-control" placeholder="Fuente de fondos..." >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Monto planificado:</strong>
                    <input type="text" name="MontoPlanificado" class="form-control" placeholder="Monto planificado..." >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Monto patrocinado:</strong>
                    <input type="text" name="MontoPatrocinado" class="form-control" placeholder="Monto patrocinado..." >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Monto de fondos propios:</strong>
                    <input type="text" name="MontoFondosPropios" class="form-control" placeholder="Monto de fondos propios..." >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Crear proyecto</button>
            </div>
        </div>
    </form>
</div>
@endsection
