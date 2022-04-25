<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adres extends Model
{
    use HasFactory;
    protected $table="adres";
    protected $fillable=["id","il","ilce","posta_kodu","telefon","adres","musteri_id","created_at","updated_at"];
}
