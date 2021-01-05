<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey='id';
    protected $table='kategori';
    protected $fillable = ['nama','created_at','updated_at'];
}
