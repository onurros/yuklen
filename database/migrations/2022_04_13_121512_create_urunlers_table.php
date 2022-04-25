<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunlers', function (Blueprint $table) {
            $table->id('urun_id');
            $table->string('urun_adi');
            $table->string('isitma_kapasitesi');
            $table->string('sogutma_kapasitesi');
            $table->string('enerji_sinifi');
            $table->unsignedBigInteger('turu_id');
            $table->foreign('turu_id')->references('urunturs')->on('tur_id');
            $table->string('ses_seviyesi');
            $table->string('renk');
            $table->unsignedBigInteger('marka_id');
            $table->foreign('marka_id')->references('marka_id')->on('markalars');
            $table->string('resim1_url');
            $table->string('resim2_url');
            $table->string('resim3_url');
            $table->integer('stok');
            $table->integer('fiyat');
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
        Schema::dropIfExists('urunlers');
    }
}
