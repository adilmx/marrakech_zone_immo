<?php

namespace App\Http\Controllers;

use App\GalleryImmo;
use App\Immobilier;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class ImmobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id',1)->get();

        $query=DB::table('immobiliers')->where('categorie',3)->get();
        return view('immobiliers.immobilier_ventes',[
            'immos'=>$query ,
            'home_carasoul'=>$home_carasoul ,
            ]);
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

        $gallery=DB::table('gallery_immos')->where('immobilier_id',$immobilier->id)->get();
      return view('immobiliers.details',['immobilier'=>$immobilier,'gallery'=>$gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function show_location()
    {
        $query=DB::table('immobiliers')->where('categorie',1)->get();
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id',2)->get();
        return view('immobiliers.immobilier_location',[
            'immos'=>$query ,
            'home_carasoul'=>$home_carasoul ,
            ]);

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
