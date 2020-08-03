<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['createCarasoul','storeCarasoul','createSections','storeESections']);
    }


     public function createCarasoul()
     {
        $carasoul = DB::table('gallery_home_carasouls')->where('id',2)->get();
         return view('home.carasoul',compact('carasoul'));
     }

     public function storeCarasoul(\App\GalleryHomeCarasoul $carasoul)
    {
        $data= request()->validate([
            'img_1' => ['image'],
            'img_2' => ['image'],
            'img_3' => ['image'],
            'img_4' => ['image'],
         ]);

            if(array_key_exists("img_1",$data)){
            $imgpath_1 = request('img_1')->store('uploads-mx', 'public');
            }else{
                $imgpath_1 = $carasoul->first_img;
            }
            if(array_key_exists("img_2",$data)){
                $imgpath_2 = request('img_2')->store('uploads-mx', 'public');
                }else{
                    $imgpath_2 = $carasoul->sec_img;
                }
                if(array_key_exists("img_3",$data)){
                    $imgpath_3 = request('img_3')->store('uploads-mx', 'public');
                    }else{
                        $imgpath_3 = $carasoul->third_img;
                    }
                    if(array_key_exists("img_4",$data)){
                        $imgpath_4 = request('img_4')->store('uploads-mx', 'public');
                        }else{
                            $imgpath_4 = $carasoul->fourth_img;
                        }



        $id_gall_home_carasoul = DB::table('gallery_home_carasouls')
        ->where('id',2)
        ->update(
            [
                'first_img' => $imgpath_1 ,
                'sec_img' => $imgpath_2 ,
                'third_img' => $imgpath_3 ,
                'fourth_img' => $imgpath_4 ,
            ],
        );
        $url = route('home') ;
        $lib = "diaporama";
        return view('done.modificationDone',compact('url','lib'));
    }




    public function createSections()
     {
        $section = DB::table('gallery_home_sections')->where('id',2)->get();
         return view('home.sections',compact('section'));
     }


     public function storeSections(\App\GalleryHomeSection $section)
    {
        $data= request()->validate([
            'img_1' => ['image'],
            'img_2' => ['image'],
         ]);
            if(array_key_exists("img_1",$data)){
            $imgpath_1 = request('img_1')->store('uploads-mx', 'public');
            }else{
                $imgpath_1 = $section->first_img;
            }
            if(array_key_exists("img_2",$data)){
                $imgpath_2 = request('img_2')->store('uploads-mx', 'public');
                }else{
                    $imgpath_2 = $section->sec_img;
                }


        $id_gall_home_carasoul = DB::table('gallery_home_sections')
        ->where('id',2)
        ->update(
            [
                'first_img' => $imgpath_1 ,
                'sec_img' => $imgpath_2 ,
            ],
        );
        $url = route('home') ;
        $lib = "section";
        return view('done.modificationDone',compact('url','lib'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $myQueri=DB::table('immobiliers')->where('categorie',3)->limit(5)->get();
        $home_carasoul = DB::table('gallery_home_carasouls')->where('id',1)->get();
        $home_sections = DB::table('gallery_home_sections')->where('id',1)->get();
        return view('welcome',compact('myQueri','home_carasoul','home_sections'));
    }
}
