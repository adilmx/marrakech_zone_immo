<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function edit(Request $request){
        $file=$request->file('myfile');
        $affected = DB::table('immobiliers')
              ->where('id', 4)
    ->update(['pic_src' => $file->store( 'uploads','public')]);
    }
}
