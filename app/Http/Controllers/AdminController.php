<?php

namespace App\Http\Controllers;

use App\User;
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
        $user=Auth::user();

        return view('admin.edit_profile',['user'=>$user]);
    }
    public function save(Request $request)
    {
        $email=$request->email;
        $name=$request->name;
        $tel=$request->tel;
        $user=Auth::user();
        $query=DB::table('users')->where('email',$email)->update(['name'=>$name,'email'=>$email]);
        if($query=!1){
return view('errors.404')
;
        }else{
            $message1="Vos modifications sont bien enregistrées";
            return view('admin.edit_profile',['message1'=>$message1,'user'=>$user]);
        }
       
    }
    public function settings()
    {
        $user=Auth::user();

        return view('admin.settings',['user'=>$user]);
    }
}
