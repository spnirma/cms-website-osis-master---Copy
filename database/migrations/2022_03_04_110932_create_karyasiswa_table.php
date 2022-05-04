<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatekaryasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyasiswa', function (Blueprint $table) {
            $table->id('No');
            $table->string('foto');
            $table->string('JudulKarya');
            $table->char('Deskripsi', 100);
            $table->string('NamaPengirim');
            $table->date('TanggalMulai');
            $table->date('TanggalAkir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyasiswa');
    }
}
