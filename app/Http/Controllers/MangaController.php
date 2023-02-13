<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ItemCart;
use Illuminate\Http\Request;
use App\Models\Manga;
use App\Models\User;

class MangaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // return User::with('person', 'cart.mangas.categories','cart.mangas.author.person')->get();
       
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manga  $Manga
     * @return \Illuminate\Http\Response
     */
    public function show(Manga $Manga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manga  $Manga
     * @return \Illuminate\Http\Response
     */
    public function edit(Manga $Manga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manga  $Manga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manga $Manga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manga  $Manga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manga $Manga)
    {
        //
    }
}
