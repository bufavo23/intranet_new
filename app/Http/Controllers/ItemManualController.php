<?php

namespace App\Http\Controllers;

use App\ItemManual;
use App\TypeItem;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ItemManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ItemManual::with('type_item')->paginate(); 

        return view('admin.itemmanual.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_item = TypeItem::pluck('name', 'id'); 

        return view('admin.itemmanual.create', compact('type_item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = ItemManual::create($request->all());

        if($request->file('file')){

            $path = Storage::disk('public')->put('items', $request->file('file'));
            
            $item->fill(['file' => asset($path)])->save();
        }

        //dd($item);

        return redirect()->route('itemmanual.index', $item->id)->with('info', 'Item guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(ItemManual $item)
    {
        return view('admin.itemmanual.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemManual $item)
    {
        $type_item = TypeItem::pluck('name', 'id'); 

        return view('admin.itemmanual.edit', compact('item', 'type_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemManual $item)
    {
        $item->update($request->all());

        if($request->file('file')){
            $path = Storage::disk('public')->put('archivos', $request->file('file'));
            $item->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('itemmanual.index', $item->id)
            ->with('info', 'Item actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemManual $item)
    {
        $item->delete();

        return back()->with('info', 'Item Eliminado Correctamente');
    }
}
