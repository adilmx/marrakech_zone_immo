<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function login()
    {
        return view('auth/login');
    }



    public function index()
    {
        // dd(Auth::user());
        return view('admin.index');
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
                        return back()->with('msg','Modification a été bien effectué');
                    } else {
                        return view('admin.errors.500', ['user' => $user]);
                    }
                }
            }
        }
    }
}
