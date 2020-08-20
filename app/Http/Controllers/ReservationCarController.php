<?php

namespace App\Http\Controllers;

use App\ReservationCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

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
    public function create($lang,\App\Car $car)
    {
        $car = DB::table('cars')->where('cars.id',$car->id)
                ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
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
            'nom' => ['required','alpha'],
            'prenom' => ['required','alpha'],
            'tele' => ['required','numeric'],
            'email' => ['required','email'],
            'date_debut_reservation' => ['required','date'],
            'date_fin_reservation' => ['required','date'],
            'car_driver' => ['required'],
            'id' => 'required',
            'c_id' => 'required',
         ]);

        $id_customer = DB::table('customers')->insertGetId(
            [
                'first_name' => $data['prenom'] ,
                'last_name' => $data['nom'] ,
                'email' => $data['email'] ,
                'tele' => $data['tele'] ,
            ],
        );
        $id_rese_car = DB::table('reservation_cars')->insertGetId(
            [
                'customer_id' => $id_customer ,
                'car_id' => $data['id'] ,
                'date_debut_reservation' => $data['date_debut_reservation'],
                'date_fin_reservation' => $data['date_fin_reservation'],
                'car_driver' => $data['car_driver'],
                'res_created_at' => date("y-m-d h:i:s"),
            ],
        );

        /*send mail */
$car = DB::table('cars')->where('cars.id',$data['id'])
                ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->get();
$Rese_car = DB::table('reservation_cars')->where('id',$id_rese_car)->get();
$infos = DB::table('infos')->where('infos.id',1)->get();
$this->sendEmail_($data,$car,$Rese_car,$data['email'],"auth.msgResToAdmin",$infos);
         $this->sendEmail_($data,$car,$Rese_car,$data['email'],"auth.msgResToCustomer",$infos);
  /* end send mail */
         return view('cars.reservationDone',[
             'data' => $data
         ]);
    }



    /*send mail */
    public function sendEmail_($data ,$pro,$res,$to_email,$msg ,$infos){
        Mail::send($msg,
            ['data' => $data , 'pro' => $pro ,'res' => $res , "infos" => $infos ],
            function ($message) use($data,$to_email){
            $message->to("".$to_email);
            $message->subject("".$data['prenom']." ".$data['nom']."");
	    $message->from('adilmax1999@gmail.com');
        });
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
    public function destroy($reservationCar)
    {
        $car_ = DB::table('reservation_cars')->where('id',$reservationCar)
         ->delete();
         return redirect()->route("admin.index");
    }
}
