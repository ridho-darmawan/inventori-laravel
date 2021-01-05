<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('pj')->comment('pj = penanggung jawab');
            $table->integer('inventaris_id')->unsigned();
            $table->string('jumlah');
            $table->integer('ruang_id')->unsigned();
            $table->datetime('tanggal_pinjam');
            $table->datetime('tanggal_kembali')->nullable();
            $table->string('kondisi');
            $table->enum('status', ['Dipinjam','Kembali'])->default('Dipinjam');
            $table->timestamps();

            // $table->foreign('inventaris_id')->references('id')->on('inventaris');
            // $table->foreign('ruang_id')->references('id')->on('ruang');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
