<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('registrasi_event', function (Blueprint $table) {
            $table->id();
            $table->string('nama_partisipasi');
            $table->string('nama_event');
            $table->date('tanggal_event');
            $table->string('nomor_registrasi')->unique();
            $table->string('kategori');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrasi_event');
    }
}