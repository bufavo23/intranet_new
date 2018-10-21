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
