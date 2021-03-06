<?php

namespace App\Http\Controllers;

use App\Motive;
use Illuminate\Http\Request;
use App\Http\Requests\BasicRequest;

class MotiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motives = Motive::paginate();

        return view('admin.motives.index', compact('motives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.motives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BasicRequest $request)
    {

        $motive = Motive::create($request->all());

        return redirect()->route('motives.edit', $motive->id)->with('info', 'Motivo guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Motive  $Motive
     * @return \Illuminate\Http\Response
     */
    public function show(Motive $motive)
    {
        return view('admin.motives.show', compact('motive'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motive  $Motive
     * @return \Illuminate\Http\Response
     */
    public function edit(Motive $motive)
    {
        return view('admin.motives.edit', compact('motive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motive  $Motive
     * @return \Illuminate\Http\Response
     */
    public function update(BasicRequest $request, Motive $motive)
    {
        
        $motive->update($request->all());

        return redirect()->route('motives.edit', $motive->id)
            ->with('info', 'Motivo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motive  $Motive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motive $motive)
    {
        $motive->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
