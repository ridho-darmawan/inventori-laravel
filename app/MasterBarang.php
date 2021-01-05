<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{
    protected $primaryKey='id';
    protected $table='master_barang';
    protected $fillable = ['nama','barang_id','kode_barang','jumlah','created_at','updated_at'];
}
