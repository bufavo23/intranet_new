<?php

namespace App\Http\Controllers;

use App\Sgcs;

use Illuminate\Http\Request;
use App\Http\Requests\BasicRequest;

use Illuminate\Support\Facades\Storage;

class SgcsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $sgcs = Sgcs::paginate(); 

        return view('admin.sistemagc.lista', compact('sgcs'));
    }

    public function sistemagc()
    {
        $sistema = Sgcs::paginate(); 

        return view('guest.sgcs', compact('sistema'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     

        return view('admin.sistemagc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BasicRequest $request)
    {
        $sgc = Sgcs::create($request->all());

        if($request->file('file')){

            $path = Storage::disk('public')->put('sgcs', $request->file('file'));
            
            $sgc->fill(['file' => asset($path)])->save();
        }

        //dd($sgc);

        return redirect()->route('sgcs.lista', $sgc->id)->with('info', 'Sgc guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sgcs  $sgc
     * @return \Illuminate\Http\Response
     */
    public function show(Sgcs $sgcs)
    {
        return view('admin.sistemagc.show', compact('sgcs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sgcs  $sgc
     * @return \Illuminate\Http\Response
     */
    public function edit(Sgcs $sgcs)
    {

        return view('admin.sistemagc.edit', compact('sgcs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sgcs  $sgc
     * @return \Illuminate\Http\Response
     */
    public function update(BasicRequest $request, Sgcs $sgcs)
    {
        $sgcs->update($request->all());

        if($request->file('file')){
            $path = Storage::disk('public')->put('sgcs', $request->file('file'));
            $sgcs->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('sgcs.lista', $sgcs->id)
            ->with('info', 'Sgc actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sgcs  $sgc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sgcs $sgc)
    {
        $sgc->delete();

        return back()->with('info', 'Sgc Eliminado Correctamente');
    }
}
