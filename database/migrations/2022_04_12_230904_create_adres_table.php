<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('adres', function (Blueprint $table) {
                $table->id();
                $table->string('il');
                $table->string('ilce');
                $table->string('posta_kodu');
                $table->string('telefon');
                $table->string('adres');
                $table->unsignedBigInteger('musteri_id');
                $table->foreign('musteri_id')->references('musteri_id')->on('musteris');
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
        Schema::dropIfExists('adres');
    }
}
