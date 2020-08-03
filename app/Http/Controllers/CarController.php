<?php

namespace App\Http\Controllers;

use App\Car;
use App\Immobilier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['create','store','edit','storeEdit','delete']);
    }


    public function index($lang,\App\CategorieCar $categorie)
    {
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id',1)->get();

        $marques = DB::table('marques')->where('categorie_id',$categorie->id)
        ->join('cars','cars.marque_id','=','marques.id')
        ->join('categorie_cars','marques.categorie_id','=','categorie_cars.id')
        ->join('etats','cars.etat_id','=','etats.id')
        ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
        ->where('cars.deleted',0)
        ->get();
            return view('cars.index',[
                'cars_s' => $marques ,
                'home_carasoul'=>$home_carasoul ,
            ]);

    }

    /*
     public function index(\App\User $user)
    {
        return view('profiles.index',compact('user'));
    }
     */




    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($lang,\App\Car $car)
    {

        $car = DB::table('cars')->where('cars.id',$car->id)
                ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->get();

        return view('cars.details',compact('car'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marques = DB::table('marques')->get();
        return view('cars.create',compact('marques'));
    }

    public function createByUser()
    {
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id',1)->get();
            return view('cars.createByUser',[
                'home_carasoul'=>$home_carasoul ,
            ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data= request()->validate([
            'categorie' => 'required',
            'marque' => 'required',
            'etat' => 'required',
            'numm_immat' => 'required',
            'nbr_place' => ['required','integer'],
            'kilometrage' => ['required','numeric'],
            'prix_min' => ['required','numeric'],
            'prix_max' => ['required','numeric'],
            'days_separator'=> ['required','integer'],
            'chare_max' => ['required','numeric'],
            'couleur' => 'required',
            'pic_src' => ['required','image'],
            'img_1' => ['required','image'],
            'img_2' => ['required','image'],
            'img_3' => ['required','image'],
            'img_4' => ['required','image'],
         ]);

        $imgpath_1 = request('pic_src')->store('uploads-mx', 'public');
        $imgpath_2 = request('img_1')->store('uploads-mx', 'public');
        $imgpath_3 = request('img_2')->store('uploads-mx', 'public');
        $imgpath_4 = request('img_3')->store('uploads-mx', 'public');
        $imgpath_5 = request('img_4')->store('uploads-mx', 'public');

        $id_etat = DB::table('etats')->insertGetId(
            ['description' => $data['etat']],
        );
        $id_categorie = DB::table('categorie_cars')->where('designation',$data['categorie'])->get();

        $marque = DB::table('marques')->where('libelle',$data['marque'])->get();
        if($marque->isEmpty()){

            $id_marque = DB::table('marques')->insertGetId(
                ['categorie_id' => $id_categorie[0]->id,'libelle' => $data['marque']],
            );
        }else{
            $id_marque = $marque[0]->id ;

        }


        $id_car = DB::table('cars')->insertGetId(
            [
                'etat_id' => $id_etat ,
                'marque_id' => $id_marque,
                'numm_immatric' => $data['numm_immat'],
                'date_mise_service' => date("y-m-d h:i:s"),
                'kilometrage' => $data['kilometrage'],
                'nbr_place' => $data['nbr_place'],
                'prix_min_per_day' => $data['prix_min'],
                'prix_max_per_day' => $data['prix_max'],
                'days_separator' => $data['days_separator'],
                'couleur' => $data['couleur'],
                'charge_max' => $data['chare_max'],
                'deleted' => 0 ,
                'pic_src' => $imgpath_1 ,
            ],
        );
        $id_gall_car = DB::table('gallery_cars')->insertGetId(
            [
                'car_id' => $id_car ,
                'first_img' => $imgpath_2 ,
                'sec_img' => $imgpath_3 ,
                'third_img' => $imgpath_4 ,
                'fourth_img' => $imgpath_5 ,
            ],
        );
        $url = route('adminCar.index',['categorie' => $id_categorie[0]->id]) ;
        $lib = "produit" ;
        return view('done.creationDone',compact('url','lib'));
    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function edit(\App\Car $car)
     {
         $marques = DB::table('marques')
         ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
         ->get();

         $car = DB::table('cars')->where('cars.id',$car->id)
                ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->get();
         return view('cars.update',compact('car','marques'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function storeEdit(\App\Car $car)
     {
         $data= request()->validate([
             'categorie' => '',
             'marque' => '',
             'marque_exc' => '',
             'etat' => '',
             'numm_immat' => '',
             'nbr_place' => ['integer'],
             'kilometrage' => ['numeric'],
             'prix_min' => ['numeric'],
             'prix_max' => ['numeric'],
             'days_separator'=> ['integer'],
             'chare_max' => ['numeric'],
             'couleur' => '',
             'pic_src' => ['image'],
             'img_1' => ['image'],
             'img_2' => ['image'],
             'img_3' => ['image'],
             'img_4' => ['image'],
          ]);
          $car = DB::table('cars')->where('cars.id',$car->id)
                ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->get();
          if(array_key_exists("pic_src",$data)){
            $imgpath_1 = request('pic_src')->store('uploads-mx', 'public');
            }else{
                $imgpath_1 = $car[0]->pic_src;
            }

            if(array_key_exists("img_1",$data)){
            $imgpath_2 = request('img_1')->store('uploads-mx', 'public');
            }else{
                $imgpath_2 = $car[0]->first_img;
            }
            if(array_key_exists("img_2",$data)){
                $imgpath_3 = request('img_2')->store('uploads-mx', 'public');
                }else{
                    $imgpath_3 = $car[0]->sec_img;
                }
                if(array_key_exists("img_3",$data)){
                    $imgpath_4 = request('img_3')->store('uploads-mx', 'public');
                    }else{
                        $imgpath_4 = $car[0]->third_img;
                    }
                    if(array_key_exists("img_4",$data)){
                        $imgpath_5 = request('img_4')->store('uploads-mx', 'public');
                        }else{
                            $imgpath_5 = $car[0]->fourth_img;
                        }


         $etat = DB::table('etats')->where('id',$car[0]->etat_id)
         ->update(
             ['description' => $data['etat']],
         );

         $categorie = DB::table('categorie_cars')->where('designation',$data['categorie'])->get();
         $marque = DB::table('marques')->where('libelle',$data['marque'])->get();
         if($marque->isEmpty() || $marque[0]->libelle == $data['marque_exc']){

             $id_marque = DB::table('marques')->where('id',$car[0]->marque_id)
             ->update(
                 ['categorie_id' => $categorie[0]->id,'libelle' => $data['marque']],
             );
         }else{
             $id_marque = $marque[0]->id ;

         }


         $car_ = DB::table('cars')->where('id',$car[0]->id)
         ->update(
             [
                 'marque_id' => $marque[0]->id,
                 'numm_immatric' => $data['numm_immat'],
                 'date_mise_service' => date("y-m-d h:i:s"),
                 'kilometrage' => $data['kilometrage'],
                 'nbr_place' => $data['nbr_place'],
                 'prix_min_per_day' => $data['prix_min'],
                 'prix_max_per_day' => $data['prix_max'],
                 'days_separator' => $data['days_separator'],
                 'couleur' => $data['couleur'],
                 'charge_max' => $data['chare_max'],
                 'deleted' => 0 ,
                 'pic_src' => $imgpath_1 ,
             ],
         );
         $id_gall_car = DB::table('gallery_cars')->where('car_id',$car[0]->id)
         ->update(
             [
                 'first_img' => $imgpath_2 ,
                 'sec_img' => $imgpath_3 ,
                 'third_img' => $imgpath_4 ,
                 'fourth_img' => $imgpath_5 ,
             ],
         );
         $url = route('adminCar.index',['categorie' => $categorie[0]->id]) ;
         $lib = "produit" ;
         return view('done.modificationDone',compact('url','lib'));
     }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function delete(Car $car)
    {
        $car_s = DB::table('cars')->where('cars.id',$car->id)
        ->join('marques','marque_id','=','marques.id')
        ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
        ->join('etats','etat_id','=','etats.id')
        ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
        ->get();

        $car_ = DB::table('cars')->where('id',$car->id)
         ->update(
             [
                 'deleted' => 1 ,
             ],
         );
        return view('confirm.delete',['produit' => $car_s]);
    }
}
