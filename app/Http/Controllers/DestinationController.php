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



        $destination = Destination::create($request->all());

        return redirect()->route('destinations.index', $destination->id)->with('info', 'Destino guardado con exito');
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
        
        $destination->update($request->all());

        return redirect()->route('destinations.index', $destination->id)
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
