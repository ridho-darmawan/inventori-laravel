<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode')->unique();
            $table->string('nama');
            $table->integer('kategori_id')->unsigned();
            $table->string('merk')->nullable();
            $table->string('ukuranCC')->nullable();
            $table->string('bahan')->nullable();
            $table->string('tahun_pembelian');
            $table->string('no_rangka')->nullable();
            $table->string('no_mesin')->nullable();
            $table->string('no_polisi')->nullable();
            $table->string('no_bpkb')->nullable();
            // $table->integer('stok');
            $table->integer('jumlah');
            $table->integer('supplier_id')->unsigned();
            $table->string('anggaran');
            $table->string('sumber_dana');
            $table->string('keterangan')->nullable();
            $table->date('tanggal_masuk');
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('supplier_id')->references('id')->on('supplier');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_masuk');
    }
}
