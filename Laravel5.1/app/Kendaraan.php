<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table='kendaraan';
    protected $fillable = ['no_plat','merk','pemilik_id']; 
     public function stnk(){
    	return $this->hasOne(Stnk::class,'stnk_id');
    }

    	public function pemilik(){
    	return $this->belongsTo(Pemilik::class);
    }
 
}
