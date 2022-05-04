<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateakunsiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akunsiswa', function (Blueprint $table) {
            $table->id('No');
            $table->string('NamaLengkap');
            $table->string('Alamat');
            $table->string('Email')->unique();
            $table->Integer('Telephone');
            $table->Integer('NISN');
            $table->char('Password', 8);
            $table->binary('foto');
            $table->string('gender');
            $table->char('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akunsiswa');
    }
}
