<?php

namespace App\Http\Controllers;

use App\ReservationLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

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
    public function create($lang,\App\Immobilier $immobilier)
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
            'nom' => ['required','alpha'],
            'prenom' => ['required','alpha'],
            'tele' => ['required','numeric'],
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

        $id_location = DB::table('reservation_locations')->insertGetId(
            [
                'id_customer' => $id_customer ,
                'id_immo_loc' => $data['id'] ,
                'date_debut_reservation' => $data['date_debut_reservation'],
                'date_fin_reservation' => $data['date_fin_reservation'],
                'nbr_personnes' => $data['nbr_personnes'],
                'res_created_at' => date("y-m-d h:i:s"),
            ],
        );
       $type_pro = "immobilier_loc" ;


        /*send mail */
$immo = DB::table('immobiliers')->where('immobiliers.id',$data['id'])
->join('type_immobiliers','id_type','=','type_immobiliers.id')
->get();
$infos = DB::table('infos')->where('infos.id',1)->get();
$Rese_immo = DB::table('reservation_locations')->where('reservation_locations.id',$id_location)

->get();
$this->sendEmail_($data,$immo,$Rese_immo,$data['email'],'auth.msgResToAdminLocImmo',$infos);
$this->sendEmail_($data,$immo,$Rese_immo,$data['email'],'auth.msgResToCustomerLocImmo',$infos);
/* end send mail */

        return view('immobiliers.reservationDone',compact('type_pro'));
    }
    /*send mail */
    public function sendEmail_($data ,$pro,$res,$to_email,$msg,$infos ){
        Mail::send($msg,
            ['data' => $data , 'pro' => $pro ,'res' => $res , 'infos' => $infos ],
            function ($message) use($data,$to_email){
            $message->to("".$to_email);
            $message->subject("".$data['prenom']." ".$data['nom']."");
	    $message->from('adilmax1999@gmail.com');
        });
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
    public function destroy($reservationLocation)
    {
        $immoL = DB::table('reservation_locations')->where('id',$reservationLocation)
         ->delete();
         return redirect()->route("admin.index");
    }
}
