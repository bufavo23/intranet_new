<?php

namespace App\Http\Controllers;

use App\StatuSend;
use Illuminate\Http\Request;

class StatuSendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusends = StatuSend::paginate();

        return view('admin.statusends.index', compact('statusends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statusends.create');
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

        $statusend = StatuSend::create($request->all());

        return redirect()->route('statusends.edit', $statusend->id)->with('info', 'Estado Envio guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StatuSend  $statusend
     * @return \Illuminate\Http\Response
     */
    public function show(StatuSend $statusend)
    {
        return view('admin.statusends.show', compact('statusend'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StatuSend  $statusend
     * @return \Illuminate\Http\Response
     */
    public function edit(StatuSend $statusend)
    {
        return view('admin.statusends.edit', compact('statusend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatuSend  $statusend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatuSend $statusend)
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
        $statusend->update($request->all());

        return redirect()->route('statusends.edit', $statusend->id)
            ->with('info', 'Estado Envio actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StatuSend  $statusend
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatuSend $statusend)
    {
        $statusend->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
