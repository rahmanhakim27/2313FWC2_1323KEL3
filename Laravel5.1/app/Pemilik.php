<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
   protected $table='pemilik';
   protected $fillable = ['nama_pemilik','alamat','no_telp'];

   public function kendaraan(){
   	return $this->hasMany(Kendaraan::class,'kendaraan_id');
   }
}
