<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarisBarang extends Model
{
    protected $primaryKey='id';
    protected $table='inventaris';
    protected $fillable =['kode_inventaris','barang_id','status','ruang_id','created_at','updated_at'];

    public function barangMasuk()
    {
        return $this->belongsTo('App\BarangMasuk', 'barang_id','id');
    }

    public function ruang()
    {
        return $this->belongsTo('App\Ruang', 'ruang_id','id');
    }
}
