<?php

namespace App\Http\Controllers;

use App\Passenger;
use App\Client;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passengers = Passenger::with('client')->paginate(); //Llamada se relaciona con la tabla user y se pagina

        return view('admin.passengers.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::pluck('name', 'id'); 

        return view('admin.passengers.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passenger = Passenger::create($request->all());

        return redirect()->route('passengers.index', $passenger->id)->with('info', 'Pasajero guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function show(Passenger $passenger)
    {
        return view('admin.passengers.show', compact('passenger'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function edit(Passenger $passenger)
    {
        $client = Client::pluck('name', 'id')->toArray(); 

        return view('admin.passengers.edit', compact('passenger', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passenger $passenger)
    {
        $passenger->update($request->all());

        return redirect()->route('passengers.index', $passenger->id)
            ->with('info', 'Pasajero actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passenger $passenger)
    {
        $passenger->delete();

        return back()->with('info', 'Pasajero Eliminado Correctamente');
    }
}
