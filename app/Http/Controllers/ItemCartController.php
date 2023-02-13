<?php

namespace App\Http\Controllers;

use App\Models\ItemCart;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use \Illuminate\Support\Facades\DB;

class ItemCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'cart_id' => 'required|int',
            'manga_id' => 'required|int',
        ]);
        
        $qty = $request->quantity ? $request->quantity : 1;
        
        DB::select('CALL AGREGAR_AL_CARRITO (?,?,?)', array($request->manga_id, $request->cart_id, $qty));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemCart  $itemCart
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCart $itemCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemCart  $itemCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemCart $itemCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemCart  $itemCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCart $itemCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemCart  $itemCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {        
        $itemCart = ItemCart::find($request->id);

        $itemCart->delete();

        redirect()->back();
    }
}
