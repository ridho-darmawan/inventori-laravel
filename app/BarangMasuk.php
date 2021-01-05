<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $primaryKey='id';
    protected $table='barang_masuk';
    protected $fillable = ['kode','nama','kategori_id','merk','ukuranCC','bahan','tahun_pembelian','no_rangka','no_mesin','no_polisi','no_bpkb','jumlah','supplier_id','anggaran','sumber_dana','keterangan','tanggal_masuk','created_at','updated_at'];

   

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id','id');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id','id');
    }
}
