<?php

namespace App\Http\Controllers;

use App\Refund;

use App\Provider; 
use App\Motive; 
use App\Destination; 
use App\StatuSend; 
use App\Statu; 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class RefundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refunds = Refund::with('providers', 'statu_sends', 'status', 'users')->paginate(); //
        //dd($refunds);
        return view('admin.refunds.index', compact('refunds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider = Provider::pluck('name', 'id');  
        $motive = Motive::pluck('name', 'id');
        $destination = Destination::pluck('name', 'id');

        return view('admin.refunds.create', compact('provider', 'motive', 'destination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refund = Refund::create($request->all());

        if($request->file('file')){

            $path = Storage::disk('public')->put('refund', $request->file('file'));
            
            $refund->fill(['file' => asset($path)])->save();
        }

        //dd($refund);

        return redirect()->route('refunds.index', $refund->id)->with('info', 'Devolucion guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function show(Refund $refund)
    {
        return view('admin.refunds.show', compact('refund'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function edit(Refund $refund)
    {
        $provider = Provider::pluck('name', 'id');  
        $motive = Motive::pluck('name', 'id');
        $destination = Destination::pluck('name', 'id');

        return view('admin.refunds.edit', compact('refund', 'provider', 'motive', 'destination'));
    }

    public function editAuditoria(Refund $refund)
    {
        $provider = Provider::pluck('name', 'id'); 

        return view('admin.refunds.edit', compact('refund', 'provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refund $refund)
    {
        $refund->update($request->all());

        if($request->file('file')){
            $path = Storage::disk('public')->put('refund', $request->file('file'));
            $refund->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('refunds.index', $refund->id)
            ->with('info', 'Devoluciones actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refund $refund)
    {
        $refund->delete();

        return back()->with('info', 'Devolucion Eliminado Correctamente');
    }
}
