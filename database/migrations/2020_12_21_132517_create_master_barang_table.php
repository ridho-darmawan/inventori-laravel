<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('barang_id')->unsigned();
            $table->integer('jumlah');
            // $table->enum('status',['Tersedia','Tidak Tersedia'])->default('Tersedia');
            $table->timestamps();

            $table->foreign('barang_id')->references('id')->on('barang_masuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_barang');
    }
}
