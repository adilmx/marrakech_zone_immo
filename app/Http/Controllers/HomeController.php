<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $myQueri=DB::table('immobiliers')->where('categorie',3)->limit(5)->get();
    

        return view('welcome',compact('myQueri'));
    }
}
