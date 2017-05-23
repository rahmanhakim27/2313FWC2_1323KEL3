<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table='petugas';
    protected $fillable = ['nama_petugas','operator_id']; 
    public function pajak(){
   	return $this->hasOne(Pajak::class,'pajak_id');
   	
   }
    public function operator(){
   	return $this->belongsTo(Operator::class,'operator_id');
   }
}
