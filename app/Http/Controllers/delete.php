<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class delete extends Controller
{
    public function urunSil(Request $request){
        DB::table('urunlers')->where('urun_id',$request->urun_id)->delete();
        $urunler=DB::table('urunlers')->get();
        $admin=DB::table('admins')->where('id',$request->id)->first();
        return view('profil',array('admin'=>$admin,'urunler'=>$urunler));
    }

}
