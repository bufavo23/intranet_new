<?php

namespace App\Http\Controllers;

use App\TypeItem;
use Illuminate\Http\Request;

class TypeiTemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeitems = TypeItem::paginate();

        return view('admin.typeitems.index', compact('typeitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeitems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeitem = TypeItem::create($request->all());

        return redirect()->route('typeitems.index', $typeitem->id)->with('info', 'Estado Envio guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeItem  $typeitem
     * @return \Illuminate\Http\Response
     */
    public function show(TypeItem $typeitem)
    {
        return view('admin.typeitems.show', compact('typeitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeItem  $typeitem
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeItem $typeitem)
    {
        return view('admin.typeitems.edit', compact('typeitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeItem  $typeitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeItem $typeitem)
    {
        $typeitem->update($request->all());

        return redirect()->route('typeitems.index', $typeitem->id)
            ->with('info', 'Estado Envio actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeItem  $typeitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeItem $typeitem)
    {
        $typeitem->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
