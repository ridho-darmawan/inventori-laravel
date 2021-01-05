<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $primaryKey='id';
    protected $table='barang_keluar';
    protected $fillable = ['kode_inventaris','barang_id','tanggal_keluar','keterangan','created_at','updated_at'];

    public function barangMasuk()
    {
        return $this->belongsTo('App\BarangMasuk', 'barang_id','id');
    }

    

   
}
