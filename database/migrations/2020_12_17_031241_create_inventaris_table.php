<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_inventaris')->unique();
            $table->integer('barang_id')->unsigned();
            $table->integer('ruang_id')->unsigned();
            // $table->integer('jumlah');
            // $table->integer('stok');
            $table->timestamps();

            // $table->foreign('barang_id')->references('id')->on('barang_masuk');
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
        Schema::dropIfExists('inventaris');
    }
}
