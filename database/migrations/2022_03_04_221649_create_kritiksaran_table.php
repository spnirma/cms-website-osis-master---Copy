<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatekritiksaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritiksaran', function (Blueprint $table) {
            $table->id('No');
            $table->text('Isi');
            $table->string('pengirim');
            $table->string('email')->unique();
            $table->string('AsalSekolah');
            $table->date('Tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kritiksaran');
    }
}
