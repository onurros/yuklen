<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayfaController;
use App\Http\Controllers\login_signin;
use App\Http\Controllers\ekleme;
use App\Http\Controllers\update;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//  Route::get('/havadurumu', function () {
// return view('havadurumu');
// });
Route::get('/deneme', function () {
    return view('deneme');
    });
Route::get('/',[SayfaController::class,'index'])->name("index");

Route::get('/kurumsal',[SayfaController::class,'kurumsal'])->name("kurumsal");
Route::get('/havadurumu',[SayfaController::class,'havadurumu'])->name("havadurumu");
Route::get('/iletisim',[SayfaController::class,'iletisim'])->name("iletisim");
Route::get('/admin_giris',[SayfaController::class,'adminGiris'])->name("agiris");
Route::get('/admin_kayit',[SayfaController::class,'adminKayit'])->name("akayit");
Route::get('/musteri_giris',[SayfaController::class,'musteriGiris'])->name("mgiris");
Route::get('/musteri_kayit',[SayfaController::class,'musteriKayit'])->name("mkayit");
Route::get('/musteri_kayit2',[SayfaController::class,'musteriKayit2'])->name("mkayit2");

Route::get('/salon_tipi',[SayfaController::class,'salontipi'])->name("salontipi");
Route::get('/kaset_tipi',[SayfaController::class,'kasettipi'])->name("kasettipi");
Route::get('/pano_tipi',[SayfaController::class,'panotipi'])->name("panotipi");
Route::get('/tavan_tipi',[SayfaController::class,'tavantipi'])->name("tavantipi");
Route::get('/split_tipi',[SayfaController::class,'splittipi'])->name("splittipi");

Route::get('/admin_paneli',[SayfaController::class,'adminPaneli'])->name("admin_paneli");
Route::get('/musteri_paneli',[SayfaController::class,'musteriPaneli'])->name("musteri_paneli");
Route::get('/musteri_adres',[SayfaController::class,'musteriAdres'])->name("musteri_adres");
Route::get('/profil',[SayfaController::class,'profil'])->name("profil");
Route::get('/tablo',[SayfaController::class,'tablo'])->name("tablo");
Route::get('/admin_ekle',[SayfaController::class,'aekle'])->name("admin_ekle");
Route::get('/urun_ekle',[SayfaController::class,'uekle'])->name("urun_ekle");
// Route::get('/urun_guncelle',[SayfaController::class,'uguncelle'])->name("urun_ekle");
//adminlogin
Route::post('adminGirisPost',[login_signin::class,'adminGiris'])->name("adminGirisPost");
Route::post('musteriGirisPost',[login_signin::class,'musteriGiris'])->name("musteriGirisPost");
Route::post('musteriKayitPost',[login_signin::class,'mkayit1'])->name("musteriKayitPost");
Route::post('musteriKayitPost2',[login_signin::class,'mkayit2'])->name("musteriKayitPost2");

Route::post('urunkayitpost',[ekleme::class,'urunEkle'])->name("urunkayitpost");
Route::post('adminkayitpost',[login_signin::class,'adminEkle'])->name("adminkayitpost");
Route::post('admin_islem',[SayfaController::class,'islemler'])->name("admin_islem"); 
Route::post('musteri_islem',[SayfaController::class,'mislemler'])->name("musteri_islem"); 
Route::post('urun_guncelle',[update::class,'uGuncelle'])->name("urun_guncelle"); 
Route::post('satis_islemler',[update::class,'satisİslemler'])->name("satis_islemler"); 
Route::post('admin_guncelle',[update::class,'adminGuncelle'])->name("admin_guncelle");
Route::post('musteri_guncelle',[update::class,'musteriGuncelle'])->name("musteri_guncelle");
Route::post('urun_guncelemesayfa',[update::class,'urunGuncelle'])->name("urun_Guncelle");
Route::post('urun_resim_Guncelle',[update::class,'urunresimGuncelle'])->name("urun_resim_Guncelle");

Route::post('sepete_ekle',[update::class,'sepetEkle'])->name("sepete_ekle");
Route::post('sepet_kaldir',[update::class,'sepetKaldir'])->name("sepet_kaldir");