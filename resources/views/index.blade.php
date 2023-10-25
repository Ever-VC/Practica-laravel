@extends('layout.base')

@section('content')
<div class="row">
    <div class="col-12 mt-3">
        <div>
            <h2 class="text-white">CRUD de Proyectos</h2>
        </div>
        <div>
            <a href="" class="btn btn-primary mt-2">Crear proyecto</a>
        </div>
    </div>

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
            <tr>
                <td class="fw-bold">1</td>
                <td>Curso de PHP y Laravel</td>
                <td>El Estado</td>
                <td>$50000</td>
                <td>$30000</td>
                <td>$20000</td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    <a href="" class="btn btn-success">Generar informe</a>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
