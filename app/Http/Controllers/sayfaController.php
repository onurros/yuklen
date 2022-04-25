<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class sayfaController extends Controller
{
    public function index(){
        $sepet=DB::table('sepete_ekles')->get();
        return view('index',array('sepet'=>$sepet));
    }

    public function iletisim(){
        $sepet=DB::table('sepete_ekles')->get();
        return view('iletisim',array('sepet'=>$sepet));
    }

    public function kurumsal(){
        $sepet=DB::table('sepete_ekles')->get();
        return view('kurumsal',array('sepet'=>$sepet));
    }

    public function havadurumu(){
        $sepet=DB::table('sepete_ekles')->get();
        return view('havadurumu',array('sepet'=>$sepet));
    }

    public function salontipi(){
        $tur=DB::table('urunturs')->where('tur_adi','Salon Tipi')->first();
        $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
        $sepet=DB::table('sepete_ekles')->get();
        return view('salontipi',array('urunler'=>$urunler,'sepet'=>$sepet));
    }

    public function kasettipi(){
        $tur=DB::table('urunturs')->where('tur_adi','Kaset Tipi')->first();
        $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
        $sepet=DB::table('sepete_ekles')->get();
        return view('kasettipi',array('urunler'=>$urunler,'sepet'=>$sepet));
    }

    public function panotipi(){
        $tur=DB::table('urunturs')->where('tur_adi','Pano Tipi')->first();
        $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
        $sepet=DB::table('sepete_ekles')->get();
        return view('panotipi',array('urunler'=>$urunler,'sepet'=>$sepet));
    }

    public function splittipi(){
        $tur=DB::table('urunturs')->where('tur_adi','Split Tipi')->first();
        $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
        $sepet=DB::table('sepete_ekles')->get();
        return view('splittipi',array('urunler'=>$urunler,'sepet'=>$sepet));
    }

    public function tavantipi(){
        $tur=DB::table('urunturs')->where('tur_adi','Tavan Tipi')->first();
        $urunler=DB::table('urunler_satis')->where('turu_id',$tur->tur_id)->get();
        $sepet=DB::table('sepete_ekles')->get();
        return view('tavantipi',array('urunler'=>$urunler,'sepet'=>$sepet));
    }

    public function admingiris(){
        return view('agiris');
    }

    public function musteriGiris(){
        return view('mgiris');
    }

    public function adminKayit(){
        return view('akayit');
    }

    public function musteriKayit(){
        return view('mkayit');
    }

    public function musteriKayit2(){
        return view('mkayit2');
    }

    public function adminPaneli(){
        return view('admin_paneli');
    }

    public function musteriPaneli(){
        return view('musteripanel');
    }

    public function musteriAdres(){
        return view('m_adres');
    }

    public function profil(){
        return view('profil');
    }

    public function tablo(){
        $admin=DB::table('admins')->get();
        $musteri=DB::table('musteris')->get();
        return view('tablo',array('admin'=>$admin,'musteri'=>$musteri));

    }
    
    public function aekle(){
        return view('adminekle');
    }

    public function uekle(){
        $marka=DB::table('markalars')->get();
        $tip=DB::table('urunturs')->get();
        return view('urun_ekle',array('marka'=>$marka,'tip'=>$tip));
    }

    // public function uguncelle(Request $request){
    //     $admin=DB::table('admins')->where('id',$request->admin)->first();
    //     $marka=DB::table('markalars')->get();
    //     $tip=DB::table('urunturs')->get();
    //     if($request->ortak=="Güncelle"){
    //     return view('urun_ekle',array('marka'=>$marka,'tip'=>$tip,'admin'=>$admin));
    //     }
    //     else{
    //         return view('urun_sil',array('marka'=>$marka,'tip'=>$tip,'admin'=>$admin));
    //     }
       
    // }

   

   public function islemler(Request $request){
    $admin=DB::table('admins')->where('id',$request->admin)->first();
    $admins=DB::table('admins')->get();
    $musteri=DB::table('musteris')->get();
    $urunler=DB::table('urunlers')->get();
    $urunler_satis=DB::table('urunler_satis')->get();
        if($request->ortak=="Anasayfa"){
            return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler,'urunler_satis'=>$urunler_satis));
        }
        else if($request->ortak=="Profil"){

        return view('profil',array('admin'=>$admin));
        }
        else if($request->ortak=="Ürün Ekle"){
        $marka=DB::table('markalars')->get();
        $tip=DB::table('urunturs')->get();
        return view('urun_ekle',array('marka'=>$marka,'tip'=>$tip,'admin'=>$admin));
        }
        else if($request->ortak=="Admin Ekle"){

            return view('adminekle',array('admin'=>$admin));
        }
        else if($request->ortak=="Tablolar"){

            return view('tablo',array('admin'=>$admin,'admins'=>$admins,'musteri'=>$musteri));
        }
        else if($request->ortak=="cikis"){

            return view('agiris');
        }
        else {
            return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler));
        }
        
   }


   public function mislemler(Request $request){
        $musteri=DB::table('musteris')->where('e_posta',$request->e_posta)->first();
        $adres=DB::table('adres')->where('musteri_id',$musteri->musteri_ID)->first();
        if($request->ortak=="Profil"){
            return view('musteripanel',array('musteri'=>$musteri));
        }
        else if($request->ortak=="adres"){

        return view('m_adres',array('musteri'=>$musteri,'adres'=>$adres));
        }
        
        else if($request->ortak=="cikis"){

            return view('mgiris');
        }
        else if($request->ortak=="anasayfa"){
            $sepet=DB::table('sepete_ekles')->get();
            return view('index',array('sepet'=>$sepet,));
        }
      
        
   }
    
}
