<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musteri extends Model
{
    use HasFactory;
    protected $table="musteris";
    protected $fillable=["musteri_ID","adi","soyadi","e_posta","sifre","created_at","updated_at"];
}
