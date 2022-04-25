<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class markalar extends Model
{
    use HasFactory;
    protected $table="markalars";
    protected $fillable=["marka_id","marka_adi","created_at","updated_at"];
}
