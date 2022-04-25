<?php

namespace App\Http\Controllers;

use App\Models\urunler_satis;
use App\Models\urunler;
use App\Models\sepete_ekle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class update extends Controller

{
    public function adminGuncelle(Request $request){
        DB::table('admins')->where('id',$request->id)->update(['adi'=>$request->adi,'soyadi'=>$request->soyadi,'e_posta'=>$request->e_posta,'sifre'=>$request->sifre]);
        $admin=DB::table('admins')->where('id',$request->id)->first();
        return view('profil',array('admin'=>$admin));
    }
    
    public function musteriGuncelle(Request $request){
        $musteri=DB::table('musteris')->where('musteri_ID',$request->id)->first();
        $adres=DB::table('adres')->where('musteri_id',$request->id)->first();
        
        if($request->ortak=="profil"){
        DB::table('musteris')->where('musteri_ID',$request->id)->update(['adi'=>$request->adi,'soyadi'=>$request->soyadi,'e_posta'=>$request->e_posta,'sifre'=>$request->sifre]);
        return view('musteripanel',array('musteri'=>$musteri));
        }

       else if($request->ortak=="adres"){
        DB::table('adres')->where('musteri_id',$request->id)->update(['il'=>$request->il,'ilce'=>$request->ilce,'posta_kodu'=>$request->posta,'telefon'=>$request->telefon,'adres'=>$request->adres]);
        $adres=DB::table('adres')->where('musteri_id',$request->id)->first();
        return view('m_adres',array('musteri'=>$musteri,'adres'=>$adres));
        
        }
        
       
    }

    public function uGuncelle(Request $request){
         $admin=DB::table('admins')->where('id',$request->admin)->first();
         $marka=DB::table('markalars')->get();
         $urun=DB::table('urunlers')->where('urun_id',$request->urun_id)->first();
         $marka=DB::table('markalars')->where('marka_id',$urun->marka_id)->first();
         $tip=DB::table('urunturs')->where('tur_id',$urun->turu_id)->first();
         $urunler=DB::table('urunlers')->get();
         $urunler_satis=DB::table('urunler_satis')->get();
         if($request->ortak=="Güncelle"){
         return view('urunguncelle',array('marka'=>$marka,'tip'=>$tip,'admin'=>$admin,'urun'=>$urun,'u_marka'=>$marka,'tur'=>$tip));
         }
         else if($request->ortak=="Sil"){
            DB::table('urunlers')->where('urun_id',$request->urun_id)->delete();
            $urunler=DB::table('urunlers')->get();
            return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler,'urunler_satis'=>$urunler_satis));
            //  return view('urun_sil',array('marka'=>$marka,'tip'=>$tip,'admin'=>$admin,'urun'=>$urun));
         }
         else if($request->ortak=="Ekle"){
            urunler_satis::create([
                'urun_id'=>$urun->urun_id,
                'urun_adi'=>$urun->urun_adi, 
                'isitma_kapasitesi'=>$urun->isitma_kapasitesi,
                'sogutma_kapasitesi'=>$urun->sogutma_kapasitesi,
                'enerji_sinifi'=>$urun->enerji_sinifi,
                'turu_id'=>$urun->turu_id,
                'ses_seviyesi'=>$urun->ses_seviyesi,
                'renk'=>$urun->renk,
                'marka_id'=>$urun->marka_id,
                'resim1_url'=>$urun->resim1_url,
                'resim2_url'=>$urun->resim2_url,
                'resim3_url'=>$urun->resim3_url,
                'stok'=>$urun->stok,
                'fiyat'=>$urun->fiyat,
                 ]); 
                
            DB::table('urunlers')->where('urun_id',$request->urun_id)->delete();
            $urunler=DB::table('urunlers')->get();
            $urunler_satis=DB::table('urunler_satis')->get();
            return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler,'urunler_satis'=>$urunler_satis));
         }
          
    }


    public function satisİslemler(Request $request){
        $admin=DB::table('admins')->where('id',$request->admin)->first();
        $marka=DB::table('markalars')->get();
        $urun=DB::table('urunler_satis')->where('urun_id',$request->urun_id)->first();
        $marka=DB::table('markalars')->where('marka_id',$urun->marka_id)->first();
       
        $tip=DB::table('urunturs')->where('tur_id',$urun->turu_id)->first();
        $urunler=DB::table('urunlers')->get();
        $urunler_satis=DB::table('urunler_satis')->get();
        if($request->ortak=="satisGuncelle"){
        return view('urunguncelle',array('marka'=>$marka,'tip'=>$tip,'admin'=>$admin,'urun'=>$urun,'u_marka'=>$marka,'tur'=>$tip));
        }
    
        else if($request->ortak=="kaldir"){
           urunler::create([
               'urun_id'=>$urun->urun_id,
               'urun_adi'=>$urun->urun_adi, 
               'isitma_kapasitesi'=>$urun->isitma_kapasitesi,
               'sogutma_kapasitesi'=>$urun->sogutma_kapasitesi,
               'enerji_sinifi'=>$urun->enerji_sinifi,
               'turu_id'=>$urun->turu_id,
               'ses_seviyesi'=>$urun->ses_seviyesi,
               'renk'=>$urun->renk,
               'marka_id'=>$urun->marka_id,
               'resim1_url'=>$urun->resim1_url,
               'resim2_url'=>$urun->resim2_url,
               'resim3_url'=>$urun->resim3_url,
               'stok'=>$urun->stok,
               'fiyat'=>$urun->fiyat,
                ]); 
               
           DB::table('urunler_satis')->where('urun_id',$request->urun_id)->delete();
           $urunler=DB::table('urunlers')->get();
           $urunler_satis=DB::table('urunler_satis')->get();
           return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler,'urunler_satis'=>$urunler_satis));
        }
         
   }

    public function urunGuncelle(Request $request){
        DB::table('urunlers')->where('urun_id',$request->urunid)->update(['urun_adi'=>$request->urun_adi,'isitma_kapasitesi'=>$request->ikapasite,'sogutma_kapasitesi'=>$request->skapasite,'enerji_sinifi'=>$request->esinifi,'ses_seviyesi'=>$request->ses_seviyesi,'renk'=>$request->renk,'stok'=>$request->stok,'fiyat'=>$request->fiyat]);
        $urunler=DB::table('urunlers')->get();
        $admin=DB::table('admins')->where('id',$request->admin)->first();
        
        return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler));
    }

    public function urunresimGuncelle(Request $request){
        $urunler=DB::table('urunlers')->get();
        $admin=DB::table('admins')->where('id',$request->admin)->first();
       
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

        DB::table('urunlers')->where('urun_id',$request->urunid)->update(['resim1_url'=>$resim_url1.$resim1,'resim2_url'=>$resim_url2.$resim2,'resim3_url'=>$resim_url3.$resim3]);
        return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler));
    }

    public function sepetEkle(Request $request){
        // return view('agiris');
        
        $spt_urun=DB::table('sepete_ekles')->where('urun_id',$request->id)->first();
        if($spt_urun==null)
        {
              sepete_ekle::create([
                'urun_id'=>$request->id,
                'urun_adi'=>$request->adi, 
                'renk'=>$request->renk,
                'resim'=>$request->resim,
                'fiyat'=>$request->fiyat,
                'adet'=>1,]);
        }

        else if($spt_urun->urun_id==$request->id){
           
           DB::table('sepete_ekles')->where('urun_id',$request->id)->update(['adet'=>($spt_urun->adet)+1]);
           DB::table('sepete_ekles')->where('urun_id',$request->id)->update(['fiyat'=>($spt_urun->fiyat)+($spt_urun->fiyat)]);

        }
      

      
        
       

        if($request->ortak=="split"){
            $tur=DB::table('urunturs')->where('tur_adi','Split Tipi')->first(); 
            $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
            $sepet=DB::table('sepete_ekles')->get();
            return view('splittipi',array('urunler'=>$urunler,'sepet'=>$sepet));
        }
        else if($request->ortak=="salon"){
            $tur=DB::table('urunturs')->where('tur_adi','Salon Tipi')->first(); 
            $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
            $sepet=DB::table('sepete_ekles')->get();
             return view('salontipi',array('urunler'=>$urunler,'sepet'=>$sepet));
        }
        else if($request->ortak=="pano"){
            $tur=DB::table('urunturs')->where('tur_adi','Pano Tipi')->first(); 
            $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
            $sepet=DB::table('sepete_ekles')->get();
             return view('panotipi',array('urunler'=>$urunler,'sepet'=>$sepet));
        }
        else if($request->ortak=="kaset"){
            $tur=DB::table('urunturs')->where('tur_adi','Kaset Tipi')->first(); 
            $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
            $sepet=DB::table('sepete_ekles')->get();
             return view('kasettipi',array('urunler'=>$urunler,'sepet'=>$sepet));
        }
        else if($request->ortak=="tavan"){
            $tur=DB::table('urunturs')->where('tur_adi','Tavan Tipi')->first(); 
            $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
            $sepet=DB::table('sepete_ekles')->get();
             return view('tavantipi',array('urunler'=>$urunler,'sepet'=>$sepet));
        }
    }

    public function sepetKaldir(Request $request){
        return view('agiris');
        
        // $spt_urun=DB::table('sepete_ekles')->where('urun_id',$request->id)->first();
        // if($spt_urun==null)
        // {
        //       sepete_ekle::create([
        //         'urun_id'=>$request->id,
        //         'urun_adi'=>$request->adi, 
        //         'renk'=>$request->renk,
        //         'resim'=>$request->resim,
        //         'fiyat'=>$request->fiyat,
        //         'adet'=>1,]);
        // }

        // else if($spt_urun->urun_id==$request->id){
           
        //    DB::table('sepete_ekles')->where('urun_id',$request->id)->update(['adet'=>($spt_urun->adet)+1]);
        //    DB::table('sepete_ekles')->where('urun_id',$request->id)->update(['fiyat'=>($spt_urun->fiyat)+($spt_urun->fiyat)]);

        // }
      

      
        // $tur=DB::table('urunturs')->where('tur_adi','Salon Tipi')->first();
        // $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
        // $sepet=DB::table('sepete_ekles')->get();
        // return view('salontipi',array('urunler'=>$urunler,'sepet'=>$sepet));

    }

}
