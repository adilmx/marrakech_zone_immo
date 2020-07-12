<?php

namespace App\Http\Controllers;

use App\ReservationCar;
use Illuminate\Http\Request;

class ReservationCarController extends Controller
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
        return view('cars.reservation');

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
     * @param  \App\ReservationCar  $reservationCar
     * @return \Illuminate\Http\Response
     */
    public function show(ReservationCar $reservationCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservationCar  $reservationCar
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationCar $reservationCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservationCar  $reservationCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationCar $reservationCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservationCar  $reservationCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationCar $reservationCar)
    {
        //
    }
}
