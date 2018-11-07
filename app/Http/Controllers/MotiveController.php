<?php

namespace App\Http\Controllers;

use App\Motive;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:120',
            'description'   => 'required|min:3|max:120',
                 ];
        $messages = [
            'name.required' => 'Favor Ingresar Nombre',
            'name.min' => 'El nombre debe tener como mínimo 3 Caracteres',
            'name.max' => 'El nombre debe tener como maximo 120 Caracteres',
            'description.required' => 'Favor Ingresar descripcion',
            'description.min' => 'La Descripcion debe tener como mínimo 3 Caracteres',
            'description.max' => 'La Descripcion debe tener como maximo 120 Caracteres'
        ];

        $validatedData = $request->validate($rules, $messages);

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
    public function update(Request $request, Motive $motive)
    {
        $rules = [
            'name' => 'required|min:3|max:120',
            'description'   => 'required|min:3|max:120',
                 ];
        $messages = [
            'name.required' => 'Favor Ingresar Nombre',
            'name.min' => 'El nombre debe tener como mínimo 3 Caracteres',
            'name.max' => 'El nombre debe tener como maximo 120 Caracteres',
            'description.required' => 'Favor Ingresar descripcion',
            'description.min' => 'La Descripcion debe tener como mínimo 3 Caracteres',
            'description.max' => 'La Descripcion debe tener como maximo 120 Caracteres'
        ];

        $validatedData = $request->validate($rules, $messages);
        
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
