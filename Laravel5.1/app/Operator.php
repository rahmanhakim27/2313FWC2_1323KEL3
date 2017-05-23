<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class operator extends Model implements AuthenticatableContract
{
	use Authenticatable;	protected $table='operator';
    protected $fillable = ['username','password','level']; 
    public function petugas(){
   	return $this->hasOne(Petugas::class,'petugas_id');
   }
   public function loginlevel($cek){
   	$this->auth = app('auth');
   	if($this->auth->user()->level == $cek){
	return true;
}else{
	return false;
}
   }
}
