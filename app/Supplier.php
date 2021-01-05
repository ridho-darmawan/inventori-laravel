<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primaryKey='id';
    protected $table='supplier';
    protected $fillable = ['alamat','nama','telepon','created_at','updated_at'];
}
