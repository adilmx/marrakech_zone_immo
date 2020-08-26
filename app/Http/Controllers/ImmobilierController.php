<?php

namespace App\Http\Controllers;

use App\Adresse;
use App\GalleryImmo;
use App\Immobilier;
use App\TypeImmobilier;
use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB as FacadesDB;

use function PHPSTORM_META\type;

class ImmobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang, $mycategorie, $type)
    {

        $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 2)->get();

        $query = DB::select('select * from immobiliers where categorie=? and id_type=? and validated=1', [
            $mycategorie, $type
        ]);
        $type = DB::table('type_immobiliers')->where('id', $type)
        ->get()->get(0);
        return view('immobiliers.immobilier_ventes', [
            'immos' => $query,
            'home_carasoul' => $home_carasoul,
            'type' => $type,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if($request->type != "Terrain"){
if($request->mycategorie != 3){
        //    ini_set('post_max_size', '100M');
        // dd($request->file('image_src'));
        request()->validate([
            'image_src' => ['required', 'image'],
            'img_1' => ['required', 'image'],
            'img_2' => ['required', 'image'],
            'img_3' => ['required', 'image'],
            'img_4' => ['required', 'image'],
            'designation' => 'required|unique:immobiliers',
            'superficie' => 'numeric',
            'superficie_psc' => 'numeric',
            'prix_min' => 'numeric',
            'prix_max' => 'numeric',
        ]);
            $adresse = $request->adresse;
        $categorie = $request->mycategorie;
        $type = $request->type;
        $designation = $request->designation;
        $prix_min = $request->prix_min;
        $prix_max = $request->prix_max;
        $nbr_chbr = $request->nbr_chbr;
        $nbr_etage = $request->nbr_etage;
        $image_src = $request->image_src;
        $imgsec_1 = $request->img_1;
        $imgsec_2 = $request->img_2;
        $imgsec_3 = $request->img_3;
        $imgsec_4 = $request->img_4;
        $patente = $request->patente;
        $date_sep = $request->date_sep;
        // // dd($image_src);
        // dd($imgsec_1);
        // dd($imgsec_2);


        $superficie = $request->superficie;
        $superficie_psc = $request->superficie_psc;
}else{
     //    ini_set('post_max_size', '100M');
        // dd($request->file('image_src'));
        request()->validate([
            'image_src' => ['required', 'image'],
            'img_1' => ['required', 'image'],
            'img_2' => ['required', 'image'],
            'img_3' => ['required', 'image'],
            'img_4' => ['required', 'image'],
            'nbr_chbr' => ['required'],
            'nbr_etage' => ['required'],
            'patente' => ['required'],

            'designation' => 'required|unique:immobiliers',
            'superficie' => 'required|numeric',
            'superficie_psc' => 'required|numeric',
            'prix_max' => 'required|numeric',
        ]);
            $adresse = $request->adresse;
        $categorie = $request->mycategorie;
        $type = $request->type;
        $designation = $request->designation;
        $prix_min = 0;
        $prix_max = $request->prix_max;
        $nbr_chbr = $request->nbr_chbr;
        $nbr_etage = $request->nbr_etage;
        $image_src = $request->image_src;
        $imgsec_1 = $request->img_1;
        $imgsec_2 = $request->img_2;
        $imgsec_3 = $request->img_3;
        $imgsec_4 = $request->img_4;
        $patente = $request->patente;
        $date_sep = 0;
        // // dd($image_src);
        // dd($imgsec_1);
        // dd($imgsec_2);


        $superficie = $request->superficie;
        $superficie_psc = $request->superficie_psc;
}
        }else{
            request()->validate([
                'image_src' => ['required', 'image'],
                'img_1' => ['required', 'image'],
                'img_2' => ['required', 'image'],
                'img_3' => ['required', 'image'],
                'img_4' => ['required', 'image'],
                'patente' => ['required'],
    
                'designation' => 'required|unique:immobiliers',
                'superficie' => 'required|numeric',
                'prix_max' => 'required|numeric',
            ]);

            $adresse = $request->adresse;
            $categorie = $request->mycategorie;
            $type = $request->type;
            $designation = $request->designation;
            $prix_min = 0;
            $prix_max = $request->prix_max;
            $nbr_chbr = 0;
            $nbr_etage = 0;
            $image_src = $request->image_src;
            $imgsec_1 = $request->img_1;
            $imgsec_2 = $request->img_2;
            $imgsec_3 = $request->img_3;
            $imgsec_4 = $request->img_4;
            $patente = $request->patente;
            $date_sep = 0;
            // // dd($image_src);
            // dd($imgsec_1);
            // dd($imgsec_2);
    
    
            $superficie = $request->superficie;
            $superficie_psc = 0;
        }

        if ($prix_max < 0) {
            return view('admin.immobilier.create', ['user' => Auth::user(), 'msgErr1' => "le prix max ne doit pas étre nul !;"]);
        } elseif ($superficie == 0) {
            return view('admin.immobilier.create', ['user' => Auth::user(), 'msgErr2' => "La superficie ne doit pas étre nulle !;"]);
        } else {
            $exists = DB::table('type_immobiliers')->where('lib', $type)->count();
            // if ($exists == 0) {
            //     $new_type = new TypeImmobilier();
            //     $new_type->lib = $type;
            //     $new_type->save();
            // }


            $type_exists = DB::table('type_immobiliers')->where('lib', $type)->get()->get(0)->id;
            $id_immo = DB::table('immobiliers')->insertGetId(
                [
                    'adresse' => $adresse,
                    'id_type' => $type_exists,
                    'designation' => $designation,
                    'categorie' => $categorie,
                    'piscine' => $superficie_psc,
                    'superfecie' => $superficie,
                    'nbr_chambre' => $nbr_chbr,
                    'nbr_etage' => $nbr_etage,
                    'price_min' => $prix_min,
                    'price_max' => $prix_max,
                    'patente' => $patente,
                    'pic_src' => $image_src->store('uploads-mx', 'public'),
                    'date_sep' => $date_sep,
                    'deleted' => 0 ,
                    'validated' => 1 ,
                ],
            );

            $id_gall_immo = DB::table('gallery_immos')->insertGetId(
                [
                    'immobilier_id' => $id_immo,
                    'first_img' => $imgsec_1->store('uploads-mx', 'public'),
                    'sec_img' => $imgsec_2->store('uploads-mx', 'public'),
                    'third_img' => $imgsec_3->store('uploads-mx', 'public'),
                    'fourth_img' => $imgsec_4->store('uploads-mx', 'public'),
                ],
            );

            //redirect me to the products that exists for the current type insert
            $immobiliers = DB::table('immobiliers')->where('id_type', $type_exists)->get();
            return view('admin.immobilier.index', [
                'user' => Auth::user(),
       'lib_type'=>$type,
                'immos' => $immobiliers, 'success' => 1
            ]);
        }
    }

    //from the other one to the perfect one
    // public function store()
    // {
    //      request()->validate([
    //         'pic_src' => ['required','image'],
    //         'img_1' => ['required','image'],
    //         'img_2' => ['required','image'],
    //         'img_3' => ['required','image'],
    //         'img_4' => ['required','image'],
    //      ]);


    //     $id_etat = DB::table('etats')->insertGetId(
    //         ['description' => $data['etat']],
    //     );
    //     $id_categorie = DB::table('categorie_cars')->where('designation',$data['categorie'])->get();

    //     $marque = DB::table('marques')->where('libelle',$data['marque'])->get();
    //     if($marque->isEmpty()){

    //         $id_marque = DB::table('marques')->insertGetId(
    //             ['categorie_id' => $id_categorie[0]->id,'libelle' => $data['marque']],
    //         );
    //     }else{
    //         $id_marque = $marque[0]->id ;

    //     }


    //     $id_car = DB::table('cars')->insertGetId(
    //         [
    //             'etat_id' => $id_etat ,
    //             'marque_id' => $id_marque,
    //             'numm_immatric' => $data['numm_immat'],
    //             'date_mise_service' => date("y-m-d h:i:s"),
    //             'kilometrage' => $data['kilometrage'],
    //             'nbr_place' => $data['nbr_place'],
    //             'prix_min_per_day' => $data['prix_min'],
    //             'prix_max_per_day' => $data['prix_max'],
    //             'days_separator' => $data['days_separator'],
    //             'couleur' => $data['couleur'],
    //             'charge_max' => $data['chare_max'],
    //             'deleted' => 0 ,
    //             'pic_src' => $imgpath_1 ,
    //         ],
    //     );
    //     $id_gall_car = DB::table('gallery_cars')->insertGetId(
    //         [
    //             'car_id' => $id_car ,
    //             'first_img' => $imgpath_2 ,
    //             'sec_img' => $imgpath_3 ,
    //             'third_img' => $imgpath_4 ,
    //             'fourth_img' => $imgpath_5 ,
    //         ],
    //     );
    //     $url = route('adminCar.index',['categorie' => $id_categorie[0]->id]) ;
    //     $lib = "produit" ;
    //     return view('done.creationDone',compact('url','lib'));
    // }


    public function indexCreate()
    {
        ini_set('post_max_size', '100M');
        return view('admin.immobilier.create', ['user' => Auth::user()]);
    }

    public function filter(Request $request)
    {

        if (isset($request->type)) {

            $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 2)->get();
            $types = TypeImmobilier::all();
            // $query=DB::table('immobiliers')->where('categorie',3)->get();
            $query = Immobilier::where([
                ['id_type', '=', $request->type],
                ['categorie', '=', 3],
                ['validated',1]
            ])->get();
            $count = count($types);
            if ($count == 0) {
                return back();
            } else {
                return view('immobiliers.immobilier_ventes', [
                    'immos' => $query,
                    'home_carasoul' => $home_carasoul,
                    'types' => $types
                ]);
            }
        }
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
    public function  indexUpdate($immobilier)

    {

        $types = TypeImmobilier::all();


        $immos = DB::table('immobiliers')->where('immobiliers.id', $immobilier)
            ->get()->get(0);

            $type = DB::table('type_immobiliers')->where('id', $immos->id_type)
            ->get()->get(0);
        /* $adresse = DB::table('adresses')->where('id', $immos->id_adresse)->get()->get(0); */

        $gallery_immo = DB::table('gallery_immos')->where('immobilier_id', $immos->id)->get()->get(0);
        if ($gallery_immo == null) {
            // Session::put('errorNotFound',1);
            /* return view('admin.immobilier.update', ['immobilier' => $immos, 'types' => $types, 'adresse' => $adresse->description]); */
            return view('admin.immobilier.update', ['immobilier' => $immos, 'types' => $types, 'type' => $type, 'adresse' => $immos->adresse]);
        } else {
            return view('admin.immobilier.update', ['immobilier' => $immos, 'types' => $types, 'type_s' => $type, 'gallery' => $gallery_immo, 'adresse' => $immos->adresse]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Immobilier $immobilier)
    {

        $gallery = DB::table('gallery_immos')->where('immobilier_id', $immobilier->id)->get();
        $type = DB::table('type_immobiliers')->where('id', $immobilier->id_type)
        ->get()->get(0);
        return view('immobiliers.details', ['immobilier' => $immobilier, 'gallery' => $gallery, 'type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function show_location()
    {
        $query = DB::table('immobiliers')->where('categorie', 1)->get();
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 2)->get();
        return view('immobiliers.immobilier_location', [
            'immos' => $query,
            'home_carasoul' => $home_carasoul,
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
        if($request->type != "Terrain"){
            if($request->mycategorie != 3){
                    //    ini_set('post_max_size', '100M');
                    // dd($request->file('image_src'));
                     $data = request()->validate([
                        'image_src' => ['image'],
                        'img_1' => ['image'],
                        'img_2' => ['image'],
                        'img_3' => ['image'],
                        'img_4' => ['image'],
                        'designation' => 'required',
                        'superficie' => 'numeric',
                        'superficie_psc' => 'numeric',
                        'prix_min' => 'numeric',
                        'prix_max' => 'numeric',
                    ]);
                        $adresse = $request->adresse;
                    $categorie = $request->mycategorie;
                    $type = $request->type;
                    $designation = $request->designation;
                    $prix_min = $request->prix_min;
                    $prix_max = $request->prix_max;
                    $nbr_chbr = $request->nbr_chbr;
                    $nbr_etage = $request->nbr_etage;
                    $image_src = $request->image_src;
                    $imgsec_1 = $request->img_1;
                    $imgsec_2 = $request->img_2;
                    $imgsec_3 = $request->img_3;
                    $imgsec_4 = $request->img_4;
                    $patente = $request->patente;
                    $date_sep = $request->date_sep;
                    // // dd($image_src);
                    // dd($imgsec_1);
                    // dd($imgsec_2);
            
            
                    $superficie = $request->superficie;
                    $superficie_psc = $request->superficie_psc;
            }else{
                 //    ini_set('post_max_size', '100M');
                    // dd($request->file('image_src'));
                     $data = request()->validate([
                        'image_src' => ['image'],
                        'img_1' => ['image'],
                        'img_2' => ['image'],
                        'img_3' => ['image'],
                        'img_4' => ['image'],
                        'nbr_chbr' => ['required'],
                        'nbr_etage' => ['required'],
                        'patente' => ['required'],
            
                        'designation' => 'required',
                        'superficie' => 'required|numeric',
                        'superficie_psc' => 'required|numeric',
                        'prix_max' => 'required|numeric',
                    ]);
                        $adresse = $request->adresse;
                    $categorie = $request->mycategorie;
                    $type = $request->type;
                    $designation = $request->designation;
                    $prix_min = 0;
                    $prix_max = $request->prix_max;
                    $nbr_chbr = $request->nbr_chbr;
                    $nbr_etage = $request->nbr_etage;
                    $image_src = $request->image_src;
                    $imgsec_1 = $request->img_1;
                    $imgsec_2 = $request->img_2;
                    $imgsec_3 = $request->img_3;
                    $imgsec_4 = $request->img_4;
                    $patente = $request->patente;
                    $date_sep = 0;
                    // // dd($image_src);
                    // dd($imgsec_1);
                    // dd($imgsec_2);
            
            
                    $superficie = $request->superficie;
                    $superficie_psc = $request->superficie_psc;
            }
                    }else{
                         $data = request()->validate([
                            'image_src' => ['image'],
                            'img_1' => ['image'],
                            'img_2' => ['image'],
                            'img_3' => ['image'],
                            'img_4' => ['image'],
                            'patente' => ['required'],
                
                            'designation' => 'required',
                            'superficie' => 'required|numeric',
                            'prix_max' => 'required|numeric',
                        ]);
            
                        $adresse = $request->adresse;
                        $categorie = $request->mycategorie;
                        $type = $request->type;
                        $designation = $request->designation;
                        $prix_min = 0;
                        $prix_max = $request->prix_max;
                        $nbr_chbr = 0;
                        $nbr_etage = 0;
                        $image_src = $request->image_src;
                        $imgsec_1 = $request->img_1;
                        $imgsec_2 = $request->img_2;
                        $imgsec_3 = $request->img_3;
                        $imgsec_4 = $request->img_4;
                        $patente = $request->patente;
                        $date_sep = 0;
                        // // dd($image_src);
                        // dd($imgsec_1);
                        // dd($imgsec_2);
                
                
                        $superficie = $request->superficie;
                        $superficie_psc = 0;
                    }
        $type_exists = DB::table('type_immobiliers')->where('lib', $type)->get()->get(0)->id;

        $immo = DB::table('immobiliers')->where('immobiliers.id',$immobilier->id)
                 ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
                ->get()->get(0);
        if(array_key_exists("image_src",$data)){
            $imgpath_1 = request('image_src')->store('uploads-mx', 'public');
            }else{
                $imgpath_1 = $immo->pic_src;
            }
            if(array_key_exists("img_1",$data)){
            $imgpath_2 = request('img_1')->store('uploads-mx', 'public');
            }else{
                $imgpath_2 = $immo->first_img;
            }
            if(array_key_exists("img_2",$data)){
                $imgpath_3 = request('img_2')->store('uploads-mx', 'public');
                }else{
                    $imgpath_3 = $immo->sec_img;
                }
                if(array_key_exists("img_3",$data)){
                    $imgpath_4 = request('img_3')->store('uploads-mx', 'public');
                    }else{
                        $imgpath_4 = $immo->third_img;
                    }
                    if(array_key_exists("img_4",$data)){
                        $imgpath_5 = request('img_4')->store('uploads-mx', 'public');
                        }else{
                            $imgpath_5 = $immo->fourth_img;
                        }




        $immo_update = DB::table('immobiliers')->where('id',$immobilier->id)->update([
            'adresse' => $adresse,
            'id_type' => $type_exists,
            'designation' => $designation,
            'categorie' => $categorie,
            'superfecie' => $superficie,
            'nbr_chambre' => $nbr_chbr,
            'nbr_etage' => $nbr_etage,
            'price_min' => $prix_min,
            'price_max' => $prix_max,
            'patente' => $patente,
            'pic_src' => $imgpath_1,
            'date_sep' => $date_sep,
        ]);
        /* $adresse_update=DB::table('adresses')->where('id',$immobilier->id_adresse)->update([
            'description'=>$adresse
        ]); */
        $gallery_update = GalleryImmo::where('immobilier_id', $immobilier->id)->update([

            'immobilier_id' => $immobilier->id,
            'first_img' => $imgpath_2,
            'sec_img' => $imgpath_3,
            'third_img' => $imgpath_4,
            'fourth_img' => $imgpath_5,
        ]);
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 2)->get();
      $myType=DB::table('immobiliers')->where('id',$immobilier->id)->get()->get(0)->id_type;
    $immobiliers=DB::select('select * from immobiliers where id_type=? and categorie=?  and validated=1 and deleted=0',[$myType,$immobilier->categorie]);

    $update_success=1;
    return view('admin.immobilier.index',[
        'immos'=>$immobiliers,
           'user'=>Auth::user(),'lib_type'=>$type,
           'update_success'=>$update_success

      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Immobilier  $immobilier
     * @return \Illuminate\Http\Response
     */
    public function destroy($immobilier)
    {
        $query = DB::table('immobiliers')->where('id', $immobilier)->update(['deleted' => 1]);
        $categorie = Session::get('categorie');
        $immobiliers = DB::select('select * from immobiliers where id_type=?  and validated=1 and deleted=0 ', [$categorie]);

        Session::put('empty', 0);
        $lib_type = TypeImmobilier::where('id', $categorie)->get()->get(0)->lib;

        $count = count($immobiliers);

        if ($count == 0) {
            $empty = 1;
            Session::put('empty', 1);



            return view('admin.immobilier.index', [
                'user' => Auth::user(), 'lib_type' => $lib_type

            ]);
        } else {
            $types_immo = TypeImmobilier::all();


            return view('admin.immobilier.index', [
                'user' => Auth::user(),

                'immos' => $immobiliers,
                'lib_type' => $lib_type
            ]);
        }
    }
    public function test()
    {
        $types = DB::select("select distinct lib,id_type,categorie from type_immobiliers,immobiliers where
        immobiliers.id_type=type_immobiliers.id and categorie='3'");
        dd($types);
    }

    public function createImmoUser(){
        $types = TypeImmobilier::all();
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id', 2)->get();
    return view('immobiliers.create_bien',compact('home_carasoul','types'));
}

public function storeImmoUser(Request $request){

    if($request->type != 2){
    //    ini_set('post_max_size', '100M');
        // dd($request->file('image_src'));
        request()->validate([
            'nom' => ['required','alpha'],
            'prenom' => ['required','alpha'],
            'email' => ['required','email'],
            'tele' => ['required','numeric'],
            'nbr_chbr' => ['required'],
            'nbr_etage' => ['required'],
            'patente' => ['required'],
            'image_src' => ['required', 'image'],
            'img_1' => ['required', 'image'],
            'img_2' => ['required', 'image'],
            'img_3' => ['required', 'image'],
            'img_4' => ['required', 'image'],
            'designation' => 'required|unique:immobiliers',
            'superficie' => ['required','numeric'],
            'superficie_psc' => ['required','numeric'],
            'prix_max' => ['required','numeric'],
        ]);
            $adresse = $request->adresse;
            $categorie = 3;
            $type = $request->type;
            $designation = $request->designation;
            $prix_min = 0;
            $prix_max = $request->prix_max;
            $nbr_chbr = $request->nbr_chbr;
            $nbr_etage = $request->nbr_etage;
            $image_src = $request->image_src;
            $imgsec_1 = $request->img_1;
            $imgsec_2 = $request->img_2;
            $imgsec_3 = $request->img_3;
            $imgsec_4 = $request->img_4;
            $patente = $request->patente;
            $date_sep = 0;
            $superficie = $request->superficie;
            $superficie_psc = $request->superficie_psc;
        }else{
            request()->validate([
                'nom' => ['required','alpha'],
            'prenom' => ['required','alpha'],
            'tele' => ['required','numeric'],
            'email' => ['required','email'],
            'patente' => ['required'],
                'image_src' => ['required', 'image'],
                'img_1' => ['required', 'image'],
                'img_2' => ['required', 'image'],
                'img_3' => ['required', 'image'],
                'img_4' => ['required', 'image'],
                'designation' => 'required|unique:immobiliers',
            'superficie' => ['required','numeric'],
            'prix_max' => ['required','numeric'],
            ]);
            $adresse = $request->adresse;
            $categorie = 3;
            $type = $request->type;
            $designation = $request->designation;
            $prix_min = 0;
            $prix_max = $request->prix_max;
            $nbr_chbr = 0;
            $nbr_etage = 0;
            $image_src = $request->image_src;
            $imgsec_1 = $request->img_1;
            $imgsec_2 = $request->img_2;
            $imgsec_3 = $request->img_3;
            $imgsec_4 = $request->img_4;
            $patente = $request->patente;
            $date_sep = 0;
            $superficie = $request->superficie;
            $superficie_psc = 0;  
        }
        
$nom = $request->nom;
$prenom = $request->prenom;
$email = $request->email;
$tele = $request->tele;

$elements = array(
"nom" => $nom ,
"prenom" => $prenom ,
"email" => $email ,
"tele" => $tele ,
"adresse" => $adresse ,
"categorie" =>$categorie,
"type" =>$type ,
"designation" =>$designation ,
"prix_min" =>$prix_min,
"prix_max" =>$prix_max ,
"nbr_chbr" =>$nbr_chbr ,
"nbr_etage" =>$nbr_etage ,
"image_src" =>$image_src ,
"imgsec_1" =>$imgsec_1,
"imgsec_2" =>$imgsec_2 ,
"imgsec_3" =>$imgsec_3 ,
"imgsec_4" =>$imgsec_4 ,
"patente" =>$patente ,
"date_sep" =>$date_sep ,
"superficie" =>$superficie ,
"superficie_psc" =>$superficie_psc ,
);

$id_customer = DB::table('customers')->insertGetId(
    [
        'first_name' => $prenom ,
        'last_name' => $nom ,
        'email' => $email ,
        'tele' => $tele ,
    ],
);
        if ($prix_max < 0) {
            return view('admin.immobilier.create', ['user' => Auth::user(), 'msgErr1' => "le prix max ne doit pas étre nul !;"]);
        } elseif ($superficie == 0) {
            return view('admin.immobilier.create', ['user' => Auth::user(), 'msgErr2' => "La superficie ne doit pas étre nulle !;"]);
        } else {
            $exists = DB::table('type_immobiliers')->where('lib', $type)->count();
            // if ($exists == 0) {
            //     $new_type = new TypeImmobilier();
            //     $new_type->lib = $type;
            //     $new_type->save();
            // }


            $type_exists = DB::table('type_immobiliers')->where('id', $type)->get()->get(0)->id;
            $id_immo = DB::table('immobiliers')->insertGetId(
                [
                    'adresse' => $adresse,
                    'id_type' => $type_exists,
                    'designation' => $designation,
                    'categorie' => $categorie,
                    'piscine' => $superficie_psc,
                    'superfecie' => $superficie,
                    'nbr_chambre' => $nbr_chbr,
                    'nbr_etage' => $nbr_etage,
                    'price_min' => $prix_min,
                    'price_max' => $prix_max,
                    'patente' => $patente,
                    'pic_src' => $image_src->store('uploads-mx', 'public'),
                    'date_sep' => $date_sep,
                    'created_by' => $id_customer,
                    'immo_created_at' => date("y-m-d h:i:s"),
                    'deleted' => 0 ,
                    'validated' => 0 ,
                ],
            );

            $id_gall_immo = DB::table('gallery_immos')->insertGetId(
                [
                    'immobilier_id' => $id_immo,
                    'first_img' => $imgsec_1->store('uploads-mx', 'public'),
                    'sec_img' => $imgsec_2->store('uploads-mx', 'public'),
                    'third_img' => $imgsec_3->store('uploads-mx', 'public'),
                    'fourth_img' => $imgsec_4->store('uploads-mx', 'public'),
                ],
            );
/*send mail */
$immo = DB::table('immobiliers')->where('immobiliers.id',$id_immo)
->join('type_immobiliers','id_type','=','type_immobiliers.id')
->get();
$infos = DB::table('infos')->where('infos.id',1)->get();
$customer = DB::table('customers')->where('customers.id',$id_customer)
->get();
$this->sendEmail_($elements,$immo,$customer,$elements['email'],'auth.msgImmoCreatedByUserAdmin',$infos);
$this->sendEmail_($elements,$immo,$customer,$elements['email'],'auth.msgImmoCreatedByUserCustomer',$infos);
/* end send mail */
            
            //redirect me to the products that exists for the current type insert
            $immobiliers = DB::table('immobiliers')->where('id_type', $type_exists)->get();
            return view('immobiliers.creationDone');
        }

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
}
