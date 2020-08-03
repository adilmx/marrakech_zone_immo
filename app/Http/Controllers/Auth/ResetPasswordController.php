<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
/* 
use Sentinel;
use Reminder; */
use \App\User;
use Mail;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    public function email()
    {
        return view('auth.passwords.email');
    }
    public function sendEmail()
    {
        $data= request()->validate([
            'email' => ['required','email'],
         ]);
         $user = DB::table('users')->where('email',$data['email'])->get();
         if(empty($user)){
            return redirect()->back()->with(['error' => "pas d'email"]);
         }
         DB::table('password_resets')->where('email',$data['email'])->updateOrinsert([
             'email' => $data['email'] ,
             'token' => str::random(60) ,
             'created_at' => date("y-m-d h:i:s") ,
         ]);

         $token_table = DB::table('password_resets')->where('email',$data['email'])->first();

         $this->sendEmail_($user,$token_table->token);
         return redirect()->back()->with(['success' => "yuupi"]);
    }
    public function sendEmail_($user , $code){
        Mail::send('auth.message', 
            ['user' => $user , 'code' => $code], 
            function ($message) use($user){
            $message->to($user[0]->email);
            $message->subject('$user[0]->name, reset password');
	    $message->from('adilmax1999@gmail.com');
        });
    }

    public function prev_reset($email , $token){
        $token_table = DB::table('password_resets')->where('token',$token)->first();
        if(!empty($token_table)){
          return view('auth.passwords.reset',compact('token','email'));
        }

    }
    public function reset(){
        $data= request()->validate([
            'token' => '',
            'email' => '',
            'password' => 'required||confirmed',
         ]);
         $token_table = DB::table('password_resets')->where('token',$data['token'])->first();
         if(!empty($token_table)){
            $user = DB::table('users')->where('email',$data['email'])->update(
                [
                    'password' => Hash::make($data['password']) ,
                ]
            );
            return redirect()->route('admin.login');    
         }
       
    }
    
}
