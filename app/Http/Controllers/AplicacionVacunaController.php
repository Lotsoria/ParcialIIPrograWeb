<?php

namespace App\Http\Controllers;

use App\Models\AplicacionVacuna;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Marca;
use App\Models\Dosi;


/**
 * Class AplicacionVacunaController
 * @package App\Http\Controllers
 */
class AplicacionVacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aplicacionVacunas = AplicacionVacuna::paginate();

        return view('aplicacion-vacuna.index', compact('aplicacionVacunas'))
            ->with('i', (request()->input('page', 1) - 1) * $aplicacionVacunas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplicacionVacuna = new AplicacionVacuna();
        $personas = Persona::pluck('CUI','id');
        $marcas = Marca::pluck('nombre','id');
        $dosis = Dosi::pluck('nombre','id');
        return view('aplicacion-vacuna.create', compact('aplicacionVacuna','personas','marcas','dosis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AplicacionVacuna::$rules);

        $aplicacionVacuna = AplicacionVacuna::create($request->all());

        return redirect()->route('aplicacion-vacunas.index')
            ->with('success', 'AplicacionVacuna created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aplicacionVacuna = AplicacionVacuna::find($id);

        return view('aplicacion-vacuna.show', compact('aplicacionVacuna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aplicacionVacuna = AplicacionVacuna::find($id);

        return view('aplicacion-vacuna.edit', compact('aplicacionVacuna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AplicacionVacuna $aplicacionVacuna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AplicacionVacuna $aplicacionVacuna)
    {
        request()->validate(AplicacionVacuna::$rules);

        $aplicacionVacuna->update($request->all());

        return redirect()->route('aplicacion-vacunas.index')
            ->with('success', 'AplicacionVacuna updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aplicacionVacuna = AplicacionVacuna::find($id)->delete();

        return redirect()->route('aplicacion-vacunas.index')
            ->with('success', 'AplicacionVacuna deleted successfully');
    }
}
