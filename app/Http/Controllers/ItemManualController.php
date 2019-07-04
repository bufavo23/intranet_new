<?php

namespace App\Http\Controllers;

use App\ItemManual;
use App\TypeItem;
use App\Provider;

use Illuminate\Http\Request;
use App\Http\Requests\BasicRequest;

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
        $items = ItemManual::with('type_item', 'provider')->paginate(); 

        return view('admin.itemmanual.index', compact('items'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {   
        
        $type_items = TypeItem::pluck('name', 'id')->toArray();  
        $providers = Provider::pluck('name', 'id')->toArray(); 
        

        return view('admin.itemmanual.create', compact('type_items', 'providers', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BasicRequest $request)
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
        $items = ItemManual::with('type_item','provider')->find($item->id);

        return view('admin.itemmanual.show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemManual $item)
    {
        $type_items = TypeItem::pluck('name', 'id')->toArray(); 
        $providers = Provider::pluck('name', 'id')->toArray(); 

        return view('admin.itemmanual.edit', compact('item', 'type_items', 'providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(BasicRequest $request, ItemManual $item)
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
