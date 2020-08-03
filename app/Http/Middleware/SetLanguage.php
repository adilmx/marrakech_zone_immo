<?php

namespace App\Http\Middleware;
session_start();

use App;
use Closure;
use URL;
class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
     if(URL::current() == "http://127.0.0.1:8000"){
        $request->lang = $_SESSION['lang'];
        if($_SESSION['lang'] == null){
            $_SESSION['lang'] = $request->lang;
        }else{
             $request->lang = $_SESSION['lang'] ;
        }
     }else{

        $_SESSION['lang'] = $request->lang;
     }
            App::setLocale($request->lang);
        return $next($request);

    }
}
