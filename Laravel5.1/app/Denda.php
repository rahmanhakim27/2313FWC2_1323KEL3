<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
   protected $table='Denda';
   protected $fillable = ['nama_pemilik','keterlambatan','total','pajak_id']; 
   public function pajak(){
   	return $this->belongsTo(pajak::class);
   }
}
