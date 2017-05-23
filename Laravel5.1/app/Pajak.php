<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
   
   protected $table='pajak';
   protected $fillable = ['nama_pemilik','total_bayar','tanggal_pembayaran','stnk_id','petugas_id']; 
   public function denda(){
   	return $this->hasOne(denda::class,'denda_id');
   }
   public function petugas(){
   	return $this->belongsTo(petugas::class);
   } 
   public function stnk(){
   	return $this->belongsTo(stnk::class,'stnk_id');
   }
}
