<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{

    
     public function createCarasoul()
     {
         return view('home.carasoul');
     }
    
     public function storeCarasoul()
    {
        $data= request()->validate([
            'img_1' => ['required','image'],
            'img_2' => ['required','image'],
            'img_3' => ['required','image'],
            'img_4' => ['required','image'],
         ]);

        $imgpath_1 = request('img_1')->store('uploads-mx', 'public');
        $imgpath_2 = request('img_2')->store('uploads-mx', 'public');
        $imgpath_3 = request('img_3')->store('uploads-mx', 'public');
        $imgpath_4 = request('img_4')->store('uploads-mx', 'public');

        
        $id_gall_home_carasoul = DB::table('gallery_home_carasoul')
        ->where('id',2)
        ->update(
            [
                'first_img' => $imgpath_1 ,
                'sec_img' => $imgpath_2 ,
                'third_img' => $imgpath_3 ,
                'fourth_img' => $imgpath_4 ,
            ],
        );
         return redirect()->route('home');
    }




    public function createSections()
     {
         return view('home.sections');
     }
    

     public function storeSections()
    {
        $data= request()->validate([
            'img_1' => ['required','image'],
            'img_2' => ['required','image'],
         ]);

        $imgpath_1 = request('img_1')->store('uploads-mx', 'public');
        $imgpath_2 = request('img_2')->store('uploads-mx', 'public');

        
        $id_gall_home_carasoul = DB::table('gallery_home_sections')
        ->where('id',2)
        ->insert(
            [
                'first_img' => $imgpath_1 ,
                'sec_img' => $imgpath_2 ,
            ],
        );
         return redirect()->route('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $myQueri=DB::table('immobiliers')->where('categorie',3)->limit(5)->get();
        $home_carasoul = DB::table('gallery_home_carasoul')->where('id',1)->get();
        $home_sections = DB::table('gallery_home_sections')->where('id',1)->get();
        return view('welcome',compact('myQueri','home_carasoul','home_sections'));
    }
}
