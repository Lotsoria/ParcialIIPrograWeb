<?php

namespace App\Http\Controllers;

use App\Models\Dosi;
use Illuminate\Http\Request;

/**
 * Class DosiController
 * @package App\Http\Controllers
 */
class DosiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosis = Dosi::paginate();

        return view('dosi.index', compact('dosis'))
            ->with('i', (request()->input('page', 1) - 1) * $dosis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosi = new Dosi();
        return view('dosi.create', compact('dosi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dosi::$rules);

        $dosi = Dosi::create($request->all());

        return redirect()->route('dosis.index')
            ->with('success', 'Dosi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosi = Dosi::find($id);

        return view('dosi.show', compact('dosi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosi = Dosi::find($id);

        return view('dosi.edit', compact('dosi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dosi $dosi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosi $dosi)
    {
        request()->validate(Dosi::$rules);

        $dosi->update($request->all());

        return redirect()->route('dosis.index')
            ->with('success', 'Dosi updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dosi = Dosi::find($id)->delete();

        return redirect()->route('dosis.index')
            ->with('success', 'Dosi deleted successfully');
    }
}
