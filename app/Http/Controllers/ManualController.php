<?php

namespace App\Http\Controllers;

use App\ItemManual;
use App\TypeItem;
use App\Provider;
use App\TypeProvider;


use Illuminate\Http\Request;

class ManualController extends Controller
{
    /**
     * Muestra datos en guest.
     *
     * @return \Illuminate\Http\Response
     */

    public function manual()
    {
        $items = ItemManual::with('type_item')->paginate(); 
        $typeproviders = TypeProvider::paginate();
        $providers = Provider::with('type_provider')->paginate();

        return view('guest.manual', compact('items', 'providers', 'typeproviders'));
    }

    public function detallemanual(Provider $provider)
    {   
        $items = ItemManual::with('type_item','provider')->where('provider_id', $provider->id)->paginate()->sortBy('type_item.id');
    	
        return view('guest.detallemanual', compact('provider', 'items'));
    }

    
}
