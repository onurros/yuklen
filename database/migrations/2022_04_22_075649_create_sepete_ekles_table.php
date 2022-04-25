<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepeteEklesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepete_ekles', function (Blueprint $table) {
            $table->id('urun_id');
            $table->string('urun_adi');
            $table->string('renk');
            $table->string('resim');
            $table->integer('fiyat');
            $table->integer('adet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sepete_ekles');
    }
}
