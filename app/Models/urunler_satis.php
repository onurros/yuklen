<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urunler_satis extends Model
{
    use HasFactory;
    protected $table="urunler_satis";
    protected $fillable=["urun_id","urun_adi","isitma_kapasitesi","sogutma_kapasitesi","enerji_sinifi","turu_id","ses_seviyesi","renk","marka_id","resim1_url","resim2_url","resim3_url","stok","fiyat","created_at","updated_at"];
}
