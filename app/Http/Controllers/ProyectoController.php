<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Redirect;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $proyectos = Proyecto::oldest()->paginate(4);
        return view('index', ['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'NombreProyecto' => 'required',
            'fuenteFondos' => 'required',
            'MontoPlanificado' => 'required',
            'MontoPatrocinado' => 'required',
            'MontoFondosPropios' => 'required'
        ]);

        Proyecto::create($request->all());
        return redirect()->route('proyectos.index')->with('success', 'Nuevo proyecto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        dd($proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto): View
    {
        return view('edit', ['proyecto' => $proyecto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto): RedirectResponse
    {
        $request->validate([
            'NombreProyecto' => 'required',
            'fuenteFondos' => 'required',
            'MontoPlanificado' => 'required',
            'MontoPatrocinado' => 'required',
            'MontoFondosPropios' => 'required'
        ]);

        $proyecto->update($request->all());
        return redirect()->route('proyectos.index')->with('success', 'El proyecto fue actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto): RedirectResponse
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'El proyecto fue eliminado exitosamente');
    }

    /**
     * Generates a report for the specified storage resource.
     */
    public function report(Proyecto $proyecto)
    {
        $today = getdate();
        $date = "$today[month]/$today[mday]/$today[year]";
        $pdf = PDF::loadView('report', ['proyecto' => $proyecto, 'fecha' => $date]);
        return $pdf->stream("reporte_$proyecto->id.pdf");
    }
}
