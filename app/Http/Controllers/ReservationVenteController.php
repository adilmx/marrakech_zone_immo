<?php

namespace App\Http\Controllers;

use App\ReservationVente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

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
    public function create($lang,\App\Immobilier $immobilier)
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
            'nom' => ['required','alpha'],
            'prenom' => ['required','alpha'],
            'tele' => ['required','numeric'],
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

        $id_vente = DB::table('reservation_ventes')->insertGetId(
            [
                'id_customer' => $id_customer ,
                'id_immo_ventes' => $data['id'] ,
                'res_created_at' => date("y-m-d h:i:s"),
            ],
        );




 /*send mail */
 $immo = DB::table('immobiliers')->where('immobiliers.id',$data['id'])
 ->join('type_immobiliers','id_type','=','type_immobiliers.id')
 ->get();
 $infos = DB::table('infos')->where('infos.id',1)->get();
 $Rese_immo = DB::table('reservation_ventes')->where('reservation_ventes.id',$id_vente)
 ->get();
 $this->sendEmail_($data,$immo,$Rese_immo,$data['email'],'auth.msgResToAdminVenteImmo',$infos);
 $this->sendEmail_($data,$immo,$Rese_immo,$data['email'],'auth.msgResToCustomerVenteImmo',$infos);
 /* end send mail */
        $type_pro = "immobilier_v" ;


        return view('immobiliers.reservationDone',compact('type_pro','immo'));
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
    public function destroy($reservationVente)
    {
        $immoV = DB::table('reservation_ventes')->where('id',$reservationVente)
         ->delete();
         return redirect()->route("admin.index");
    }
}
