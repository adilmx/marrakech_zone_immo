<?php

namespace App\Http\Controllers;

use App\ReservationLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationLocationController extends Controller
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
        return view('immobiliers.reservation',compact('immobilier'));
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
            'date_debut_reservation' => ['required','date'],
            'date_fin_reservation' => ['required','date'],
            'nbr_personnes' => ['required','numeric'],
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

        $id_car = DB::table('reservation_locations')->insertGetId(
            [
                'id_customer' => $id_customer ,
                'id_immo_loc' => $data['id'] ,
                'date_debut_reservation' => $data['date_debut_reservation'],
                'date_fin_reservation' => $data['date_fin_reservation'],
                'nbr_personnes' => $data['nbr_personnes'],
            ],
        );



        return view('immobiliers.reservationDone');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReservationLocation  $reservationLocation
     * @return \Illuminate\Http\Response
     */
    public function show(ReservationLocation $reservationLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservationLocation  $reservationLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationLocation $reservationLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservationLocation  $reservationLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationLocation $reservationLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservationLocation  $reservationLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationLocation $reservationLocation)
    {
        //
    }
}
