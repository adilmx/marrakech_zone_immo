<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AjaxController extends Controller
{
    public function ajax(Request $request){
        $data = $request->all();
if($data['type'] == "1" ){
    $query_pre=DB::table('immobiliers')->where('id',$data['id'])->get();
if($query_pre[0]->deleted == 1){
    $deleted = 0;
}else{
    $deleted = 1;
}
$query=DB::table('immobiliers')->where('id',$data['id'])->update(
    [
        'deleted' => $deleted ,
    ]
);
}elseif($data['type'] == "2"){
    $query_pre=DB::table('immobiliers')->where('id',$data['id'])->get();
    if($query_pre[0]->categorie == 1){
        $deleted = 2;
    }else{
        $deleted = 1;
    }
    $query=DB::table('immobiliers')->where('id',$data['id'])->update(
        [
            'categorie' => $deleted ,
        ]
    );
}elseif($data['type'] == "3"){
    $query_pre=DB::table('cars')->where('id',$data['id'])->get();
    if($query_pre[0]->deleted == 1){
        $deleted = 0;
    }else{
        $deleted = 1;
    }
    $query=DB::table('cars')->where('id',$data['id'])->update(
        [
            'deleted' => $deleted ,
        ]
    );
}elseif($data['type'] == "4"){
    $query_pre=DB::table('immobiliers')->where('id',$data['id'])->get();
    if($query_pre[0]->validated == 1){
        $deleted = 0;
    }else{
        $deleted = 1;
    }
    $query=DB::table('immobiliers')->where('id',$data['id'])->update(
        [
            'validated' => $deleted ,
        ]
    );
}
        return response()->json(['res' => $deleted]);
    }


public function update($tab,$id){

return $deleted;

}

}
