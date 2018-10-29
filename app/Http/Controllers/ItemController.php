<?php

namespace App\Http\Controllers;

use App\Item;
use App\TypeItem;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with('type_item')->paginate(5); 

        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_item = TypeItem::pluck('name', 'id'); 

        return view('admin.items.create', compact('type_item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Item::create($request->all());

        if($request->file('file')){

            $path = Storage::disk('public')->put('items', $request->file('file'));
            
            $item->fill(['file' => asset($path)])->save();
        }

        //dd($item);

        return redirect()->route('items.index', $item->id)->with('info', 'Proveedor guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('admin.items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $type_item = TypeItem::pluck('name', 'id'); 

        return view('admin.items.edit', compact('item', 'type_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->update($request->all());

        if($request->file('file')){
            $path = Storage::disk('public')->put('archivos', $request->file('file'));
            $item->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('items.index', $item->id)
            ->with('info', 'Proveedor actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return back()->with('info', 'Proveedor Eliminado Correctamente');
    }
}
