<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $primaryKey='id';
    protected $table='peminjaman';
    protected $fillable = ['pj','inventaris_id','pemberi','penerima_barang','tanggal_pinjam','tanggal_kembali','kondisi','status','created_at','updated_at'];

   

    // public function ruangan()
    // {
    //     return $this->belongsTo('App\Ruang', 'ruang_id','id');
    // }

    public function getInventaris()
    {
        return $this->belongsTo('App\InventarisBarang', 'inventaris_id','kode_inventaris');
    }

    public function penanggung()
    {
        return $this->belongsTo('App\Guru', 'pj','id');
    }
}
