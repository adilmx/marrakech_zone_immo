<?php

namespace App\Http\Controllers;

use App\ReservationCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function create(\App\Car $car)
    {
        $car = DB::table('cars')->where('cars.id',$car->id)
                ->join('marques','marque_id','=','marques.id')
                ->join('categories','categories.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->get();
        return view('cars.reservation',compact('car'));
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
            'raison_sociale' => ['required'],
            'nom' => ['required','string'],
            'prenom' => ['required','string'],
            'tele' => ['required','string'],
            'email' => ['required','email'],
            'date_debut_reservation' => ['required','date'],
            'time_debut_reservation' => ['required'],
            'date_fin_reservation' => ['required','date'],
            'time_fin_reservation' => ['required'],
            'car_driver' => ['required'],

         ]);

        $id_customer = DB::table('customers')->insertGetId(
            [
                'raison_sociale' => $data['raison_sociale'] ,
                'first_name' => $data['prenom'] ,
                'last_name' => $data['nom'] ,
                'email' => $data['email'] ,
                'tele' => $data['tele'] ,
            ],
        );
        $id_car = DB::table('reservation_cars')->insertGetId(
            [
                'customer_id' => $id_customer ,
                'car_id' => 1 ,
                'date_debut_reservation' => $data['date_debut_reservation'],
                'time_debut_reservation' => $data['time_debut_reservation'],
                'date_fin_reservation' => $data['date_fin_reservation'],
                'time_fin_reservation' => $data['time_fin_reservation'],
                'car_driver' => $data['car_driver'],
            ],
        );



         return redirect()->route('car.index',['categorie' => 1]);
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
