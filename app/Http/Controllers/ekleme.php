<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\urunler;
class ekleme extends Controller
{
    public function urunEkle(Request $request){
        
         $markalar=DB::table('markalars')->where('marka_adi',$request->marka)->first();
        
         $uruntip=DB::table('urunturs')->where('tur_adi',$request->utip)->first();
        

         //resim uzantısı
         $resim_url1="urun_resimler/r1/";
         $resim_url2="urun_resimler/r2/";
         $resim_url3="urun_resimler/r3/";

            //resmi dosyaya yüklemek içim
            $resim1=$request->r1->getClientOriginalName(); 
            $request->r1->move(public_path($resim_url1),$resim1);

            $resim2=$request->r2->getClientOriginalName(); 
            $request->r2->move(public_path($resim_url2),$resim2);

            $resim3=$request->r3->getClientOriginalName(); 
            $request->r3->move(public_path($resim_url3),$resim3);
          
        urunler::create([
                'urun_adi'=>$request->urun_adi, 
                'isitma_kapasitesi'=>$request->ikapasite,
                'sogutma_kapasitesi'=>$request->skapasite,
                'enerji_sinifi'=>$request->esinifi,
                'turu_id'=>$uruntip->tur_id,
                'ses_seviyesi'=>$request->ses_seviyesi,
                'renk'=>$request->renk,
                'marka_id'=>$markalar->marka_id,
                'resim1_url'=>$resim_url1.$resim1,
                'resim2_url'=>$resim_url2.$resim2,
                'resim3_url'=>$resim_url3.$resim3,
                'stok'=>$request->stok,
                'fiyat'=>$request->fiyat,
                 ]); 
        
         $admin=DB::table('admins')->where('id',$request->admin)->first();
         $marka=DB::table('markalars')->get();
         $tip=DB::table('urunturs')->get();
         return view('urun_ekle',array('marka'=>$marka,'tip'=>$tip,'admin'=>$admin));
                 
    }
}
