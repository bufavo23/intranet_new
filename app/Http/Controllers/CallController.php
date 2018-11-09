<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CallRequest;

use App\Call;
use App\User;


class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls = Call::with('user')->paginate(); //Llamada se relaciona con la tabla user y se pagina

        return view('admin.calls.index', compact('calls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::pluck('name', 'id')->toArray();

        return view('admin.calls.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CallRequest $request)
    {

        $call = Call::create($request->all());

        return redirect()->route('calls.index', $call->id)->with('info', 'Llamada guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function show(Call $call)
    {
        return view('admin.calls.show', compact('call'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function edit(Call $call)
    {
        $user = User::pluck('name', 'id')->toArray();

        return view('admin.calls.edit', compact('call', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function update(CallRequest $request, Call $call)
    {
        $call->update($request->all());

        return redirect()->route('calls.index', $call->id)
            ->with('info', 'Llamada actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function destroy(Call $call)
    {
        $call->delete();
        return back()->with('info', 'Llamada Eliminado Correctamente');
    }
}
