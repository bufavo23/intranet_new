<?php

namespace App\Http\Controllers;

use App\TypeProvider;
use Illuminate\Http\Request;

class TypeProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeproviders = TypeProvider::paginate();

        return view('admin.typeproviders.index', compact('typeproviders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeproviders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeprovider = TypeProvider::create($request->all());

        return redirect()->route('typeproviders.index', $typeprovider->id)->with('info', 'Estado Envio guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeProvider  $typeprovider
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProvider $typeprovider)
    {
        return view('admin.typeproviders.show', compact('typeprovider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeProvider  $typeprovider
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeProvider $typeprovider)
    {
        return view('admin.typeproviders.edit', compact('typeprovider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeProvider  $typeprovider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeProvider $typeprovider)
    {
        $typeprovider->update($request->all());

        return redirect()->route('typeproviders.index', $typeprovider->id)
            ->with('info', 'Estado Envio actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeProvider  $typeprovider
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProvider $typeprovider)
    {
        $typeprovider->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
