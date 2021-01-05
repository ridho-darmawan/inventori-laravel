<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $primaryKey='id';
    protected $table='guru';
    protected $fillable = ['nama','nip','created_at','updated_at'];
}
