<?php

namespace App\Http\Controllers;

use App\Provider;
use App\TypeProvider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderRequest;

use Illuminate\Support\Facades\Storage;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::with('type_provider')->paginate(); 

        //dd($providers);

        return view('admin.providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_provider = TypeProvider::pluck('name', 'id')->toArray(); 

        return view('admin.providers.create', compact('type_provider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderRequest $request)
    {
        $provider = Provider::create($request->all());

        if($request->file('file')){

            $path = Storage::disk('public')->put('archivos', $request->file('file'));
            
            $provider->fill(['file' => asset($path)])->save();
        }

        //dd($provider);

        return redirect()->route('providers.index', $provider->id)->with('info', 'Proveedor guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        return view('admin.providers.show', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        $type_provider = TypeProvider::pluck('name', 'id')->toArray(); 

        return view('admin.providers.edit', compact('provider', 'type_provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderRequest $request, Provider $provider)
    {
        $provider->update($request->all());

        if($request->file('file')){
            $path = Storage::disk('public')->put('archivos', $request->file('file'));
            $provider->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('providers.index', $provider->id)
            ->with('info', 'Proveedor actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();

        return back()->with('info', 'Proveedor Eliminado Correctamente');
    }
}
