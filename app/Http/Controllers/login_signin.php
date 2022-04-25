<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
use App\Models\musteri;
use App\Models\adres;

class login_signin extends Controller
{
    public function adminGiris(Request $request){
        $admin=DB::table('admins')->where('e_posta',$request->e_posta)->first();
        $urunler=DB::table('urunlers')->get();
        $urunler_satis=DB::table('urunler_satis')->get();
        if($admin!=null){
            if($request->sifre==$admin->sifre){
                // return view('adminpanel',array('admin'=>$admin));
               return view('admin_paneli',array('admin'=>$admin,'urunler'=>$urunler,'urunler_satis'=>$urunler_satis));
            }
            else{
                return redirect()->route('agiris')->with('hata','Hatalı Şifre!');
            }
        }
        else
        {
            return redirect()->route('agiris')->with('hata','Böyle bir kullanıcı yok!');
        }

        
    }
           public function musteriGiris(Request $request){
            $musteri=DB::table('musteris')->where('e_posta',$request->e_posta)->first();
            if($musteri!=null){
                if($request->sifre==$musteri->sifre){
                    // return view('adminpanel',array('admin'=>$admin));
                   
                    return view('musteripanel',array('musteri'=>$musteri));
                }
                else{
                    return redirect()->route('mgiris')->with('hata','Hatalı Şifre!');
                }
            }
            else
            {
                return redirect()->route('mgiris')->with('hata','Böyle bir kullanıcı yok!');
            }

        }

        public function mkayit1(Request $request){
        
           if($request->sifre==$request->sifre2){
            return view('mkayit2',array('adi'=>$request->adi,'soyadi'=>$request->soyadi,'e_posta'=>$request->e_posta,'sifre'=>$request->sifre));
           }
           else
           {
            return redirect()->route('mkayit')->with('hata','Şifreler uyuşmuyor!');
           }
        }

        public function mkayit2(Request $request){
        
           musteri::create([
                'adi'=>$request->adi, 
                'soyadi'=>$request->soyadi,
                'e_posta'=>$request->e_posta,
                'sifre'=>$request->sifre,
             ]); 
        
          $musteri=DB::table('musteris')->where('e_posta',$request->e_posta)->first();
         
          adres::create([
                'il'=>$request->il, 
                'ilce'=>$request->ilce,
                'posta_kodu'=>$request->posta_kodu,
                'telefon'=>$request->telefon,
                'adres'=>$request->adres,
                'musteri_id'=>$musteri->musteri_ID
          ]);

          return redirect()->route('mgiris')->with('hata','Ekleme başarılı');
        
          
         }


         public function adminEkle(Request $request){
          $admin=DB::table('admins')->where('id',$request->admin2)->first();
          $marka=DB::table('markalars')->get();
          $tip=DB::table('urunturs')->get();
            admin::create([
                 'adi'=>$request->adi, 
                 'soyadi'=>$request->soyadi,
                 'e_posta'=>$request->e_posta,
                 'sifre'=>$request->sifre,
              ]); 
         
   
             
              return view('adminekle',array('admin'=>$admin));
         
           
          }

        

}