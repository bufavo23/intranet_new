<?php

namespace App\Http\Controllers;

use App\Statu;
use Illuminate\Http\Request;

class StatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Statu::paginate();

        return view('admin.status.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status.create');
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

        $statu = Statu::create($request->all());

        return redirect()->route('status.edit', $statu->id)->with('info', 'Estado guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function show(Statu $statu)
    {
        return view('admin.status.show', compact('statu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function edit(Statu $statu)
    {
        return view('admin.status.edit', compact('statu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statu $statu)
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
        
        $statu->update($request->all());

        return redirect()->route('status.edit', $statu->id)
            ->with('info', 'Estado actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statu $statu)
    {
        $statu->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
