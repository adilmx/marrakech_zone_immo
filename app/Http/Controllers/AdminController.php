<?php

namespace App\Http\Controllers;

use App;
use App\User;
use Session;
use App\TypeImmobilier;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function login()

    {   
        
        return view('auth.login');
    }



    public function index()
    {
        $cars = DB::table('cars')
                ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->get();
        $cars_count = DB::table('cars')
                ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->count();

        $customers = DB::table('customers')
                   ->get();
        $customers_count = DB::table('customers')
                   ->count();

        $reservation_cars = DB::table('reservation_cars')
        ->join('customers','customer_id','=','customers.id')
        ->join('cars','car_id','=','cars.id')
        ->join('marques','marque_id','=','marques.id')
                ->join('categorie_cars','categorie_cars.id','=','marques.categorie_id')
                ->join('etats','etat_id','=','etats.id')
                ->join('gallery_cars','gallery_cars.car_id','=','cars.id')
                ->select("*","reservation_cars.id as res_id")
                ->get();
        $reservation_cars_count = DB::table('reservation_cars')
                   ->count();

        $reservation_locations = DB::table('reservation_locations')
        ->join('customers','id_customer','=','customers.id')
        ->join('immobiliers','id_immo_loc','=','immobiliers.id')
        ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
        ->select("*","reservation_locations.id as res_id")
                   ->get();
        $reservation_locations_count = DB::table('reservation_locations')
                   ->count();

        $reservation_ventes = DB::table('reservation_ventes')
        ->join('customers','id_customer','=','customers.id')
        ->join('immobiliers','id_immo_ventes','=','immobiliers.id')
        ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
        ->select("*","reservation_ventes.id as res_id")
                   ->get();
        $reservation_ventes_count = DB::table('reservation_ventes')
                   ->count();

        $reservation_total_count = $reservation_cars_count + $reservation_locations_count + $reservation_ventes_count;
        $immobiliers = DB::table('immobiliers')
        ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
                    ->get();

        $immobiliers_count = DB::table('immobiliers')
        ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
                    ->count();

                    $immobiliers_nc = DB::table('immobiliers')->where("immobiliers.deleted",0)
                    ->join('type_immobiliers','type_immobiliers.id','=','immobiliers.id_type')
        ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
        ->join('customers','customers.id','=','immobiliers.created_by')
                    ->get();

        $immobiliers_nc_count = DB::table('immobiliers')->where("immobiliers.deleted",0)
        ->join('type_immobiliers','type_immobiliers.id','=','immobiliers.id_type')
        ->join('gallery_immos','gallery_immos.immobilier_id','=','immobiliers.id')
        ->join('customers','customers.id','=','immobiliers.created_by')
                    ->count();
   Session::put('types_immo',null);
                    $types_immo=TypeImmobilier::all();
                   
                     Session::put('types_immo',$types_immo);
        return view('admin.index',compact('cars','cars_count',
        'immobiliers','immobiliers_count',
        'immobiliers_nc','immobiliers_nc_count',
        'customers','customers_count',
        'reservation_cars','reservation_cars_count',
        'reservation_locations','reservation_locations_count',
        'reservation_ventes' ,'reservation_ventes_count',
        'reservation_total_count'
    ));
    }

     
    public function indexImmo($categorie)
    {   
        Session::put('categorie',null);
        Session::put('categorie',$categorie);

        $immobiliers=DB::select('select * from immobiliers where id_type=?  and validated=1 and deleted=0',[$categorie
        
       ]);
        Session::put('empty',0);
        $lib_type=TypeImmobilier::where('id',$categorie)->get()->get(0)->lib;
      
        $count=count($immobiliers);
       
        if($count==0){
         $empty=1;
        // Session::put('empty',1); 
         
          return view('admin.immobilier.index',[
             'immos'=>$immobiliers,
                'user'=>Auth::user(),'lib_type'=>$lib_type,
                'empty'=>$empty
                
           ]);

        }
        else{
            $types_immo=TypeImmobilier::all();

       
             return view('admin.immobilier.index',[
                'user'=>Auth::user(),
                
            'immos'=>$immobiliers,
            'lib_type'=>$lib_type]);
        }
   
    }

    public function edit()
    {
        $user = Auth::user();

        return view('admin.edit_profile', ['user' => $user]);
    }



    public function save(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $tel = $request->tel;
        $user = Auth::user();
        $query = DB::table('users')->where('email', $email)->update(['name' => $name, 'email' => $email]);
        if ($query = !1) {
            return view('errors.404');
        } else {
            $message1 = "Vos modifications sont bien enregistrées";
            return view('admin.edit_profile', ['message1' => $message1, 'user' => $user]);
        }
    }


    public function settings()
    {
        $user = Auth::user();

        return view('admin.settings', ['user' => $user]);
    }
    public function done()
    {
        $user = Auth::user();

        return view('admin.settings_done', ['user' => $user]);
    }
    public function reset(Request $request)
    {
        $user = Auth::user();
        $old_passwd = $request->old_passwd;
        $new_passwd = $request->new_passwd;
        $confirmd_passwd = $request->confirmd_passwd;
         if (!Hash::check($old_passwd, $user->password)) {
            $message1 = "L'ancien mot de passe saisi n'est pas correct";
            return view('admin.settings', ['user' => $user, 'message1' => $message1]);
        } else {
            if (strlen($new_passwd)< 8) {
                $message2 = "Mot de passe doit avoir au minimum 8 caractéres !";
                return view('admin.settings', ['user' => $user, 'message2' => $message2]);
            } else {
                if ($new_passwd != $confirmd_passwd) {
                    $message3 = "La confirmation du mot de passe n'est pas valide  !";
                    return view('admin.settings', ['user' => $user, 'message3' => $message3]);
                } else {
                    $query = DB::table('users')->where('email', $user->email)->update(['password' => Hash::make($new_passwd)]);
                    if ($query == 1) {
                        return view('admin.index',['user'=>$user])->with('msg','Modification a été bien effectuée');
                    } else {
                        return view('admin.errors.500', ['user' => $user]);
                    }
                }
            }
        }
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
