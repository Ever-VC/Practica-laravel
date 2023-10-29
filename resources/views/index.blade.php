@extends('layout.base')

@section('content')
<div class="row">
    <div class="col-12 mt-3">
        <div>
            <h2 class="text-white">CRUD de Proyectos</h2>
        </div>
        <div>
            <a href="{{route('proyectos.create')}}" class="btn btn-primary mt-2">Crear proyecto</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-3">
            <strong>{{Session::get('success')}}</strong><br><br>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Id</th>
                <th>Nombre del proyecto</th>
                <th>Fuente de fondos</th>
                <th>Monto planificado</th>
                <th>Monto patrocinado</th>
                <th>Monto de fondos propios</th>
                <th>Acción</th>
            </tr>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td class="fw-bold">{{$proyecto->id}}</td>
                    <td>{{$proyecto->NombreProyecto}}</td>
                    <td>{{$proyecto->fuenteFondos}}</td>
                    <td>${{$proyecto->MontoPlanificado}}</td>
                    <td>${{$proyecto->MontoPatrocinado}}</td>
                    <td>${{$proyecto->MontoFondosPropios}}</td>
                    <td>
                        <a href="{{route('proyectos.edit', $proyecto)}}" class="btn btn-warning">Editar</a>
                        <form action="{{route('proyectos.destroy', $proyecto)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        <a href="{{route('proyectos.report', $proyecto)}}" class="btn btn-success">Generar informe</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$proyectos->links()}}
    </div>
</div>
@endsection
