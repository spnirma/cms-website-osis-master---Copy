<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateinfolombaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infolomba', function (Blueprint $table) {
            $table->id('No');
            $table->binary('Pamflet');
            $table->string('JudulKegiatan');
            $table->string('Status');
            $table->char('Deskripsi', 100);
            $table->string('KetuaPelaksana');
            $table->date('WaktuKegiatan');
            $table->string('Sasaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infolomba');
    }
}
