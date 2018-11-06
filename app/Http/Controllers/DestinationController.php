<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::paginate();

        return view('admin.destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name'          => 'required|min:3|max:120',
            'description'   => 'required|min:3|max:120',
        ]);



        $destination = Destination::create($request->all());

        return redirect()->route('destinations.edit', $destination->id)->with('info', 'Destino guardado con exito');
    }

    // Devuelve un mensaje por cada atributo erróneo
    public function messages()
    {
      return [
        'name.required' => 'Favor Ingresar Nombre',
        'name.min' => 'El nombre debe tener como mínimo 3 Caracteres',
        'name.max' => 'El nombre debe tener como maximo 120 Caracteres',
        'descripcion.required' => 'Favor Ingresar descripcion',
        'descripcion.min' => 'El nombre debe tener como mínimo 3 Caracteres',
        'descripcion.max' => 'El nombre debe tener como maximo 120 Caracteres'
      ];
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        return view('admin.destinations.show', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('admin.destinations.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $destination->update($request->all());

        return redirect()->route('destinations.edit', $destination->id)
            ->with('info', 'Destino actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();

        return back()->with('info', 'Destino Eliminado Correctamente');
    }
}
