<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function indexCar(\App\CategorieCar $categorie)
    {

        $marques = DB::table('marques')->where('categorie_id',$categorie->id)
        ->join('cars','cars.marque_id','=','marques.id')
        ->join('categorie_cars','marques.categorie_id','=','categorie_cars.id')
        ->join('etats','cars.etat_id','=','etats.id')
        ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
        ->where('cars.deleted',0)
        ->get();

            return view('cars.adminCar',[
                'cars_s' => $marques ,
            ]);
    }
}
