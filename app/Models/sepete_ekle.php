<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepete_ekle extends Model
{
    use HasFactory;
    protected $table="sepete_ekles";
    protected $fillable=["urun_id","urun_adi","renk","resim","fiyat","adet","created_at","updated_at"];
}
