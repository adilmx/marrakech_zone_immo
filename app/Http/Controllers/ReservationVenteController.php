<?php

namespace App\Http\Controllers;

use App\ReservationVente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationVenteController extends Controller
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
    public function create(\App\Immobilier $immobilier)
    {
        return view('immobiliers.reservationv',compact('immobilier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= request()->validate([
            'nom' => ['required','string'],
            'prenom' => ['required','string'],
            'tele' => ['required','string'],
            'email' => ['required','email'],
            'id' => 'required',
         ]);

        $id_customer = DB::table('customers')->insertGetId(
            [
                'first_name' => $data['prenom'] ,
                'last_name' => $data['nom'] ,
                'email' => $data['email'] ,
                'tele' => $data['tele'] ,
            ],
        );

        $id_car = DB::table('reservation_ventes')->insertGetId(
            [
                'id_customer' => $id_customer ,
                'id_immo_ventes' => $data['id'] ,
            ],
        );





        $type_pro = "immobilier_v" ;


        return view('immobiliers.reservationDone',compact('type_pro'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReservationVente  $reservationVente
     * @return \Illuminate\Http\Response
     */
    public function show(ReservationVente $reservationVente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservationVente  $reservationVente
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationVente $reservationVente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservationVente  $reservationVente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationVente $reservationVente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservationVente  $reservationVente
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationVente $reservationVente)
    {
        //
    }
}
