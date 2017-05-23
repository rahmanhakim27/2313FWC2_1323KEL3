<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stnk extends Model
{
   public static $rules = ['tanggal_pembayaran' => 'date'];
	protected $table='stnk';
   protected $fillable = ['nama_pemilik','merk','jenis','tanggal_pembayaran','kendaraan_id']; 
    public function pajak(){
   	return $this->hasMany(Pajak::class,'pajak_id');
   }
   public function kendaraan(){
   	return $this->belongsTo(Kendaraan::class);
   }
   public function pemilik(){
   	return $this->belongsTo(Pemilik::class);
   }
}
