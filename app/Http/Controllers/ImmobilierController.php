<?php

namespace App\Http\Controllers;

use App\Immobilier;
use Illuminate\Http\Request;
use DB;
class ImmobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=DB::table('immobiliers')->where('categorie',3)->get();
        return view('immobiliers.immobilier_ventes',['immos'=>$query]);
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
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function show(Immobilier $immobilier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function edit(Immobilier $immobilier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immobilier $immobilier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immobilier $immobilier)
    {
        //
    }
}
