<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ajaxController(Request $request){
        $data = $request->all();
        return response()->json(['success' => 'hii']);
    }
}
