<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\kendaraanrequest;

use App\Kendaraan;
use App\Pemilik;

class kendaraanController extends Controller
{
    public function awal()
    {
        return view('kendaraan.awal',['data'=>kendaraan::all()]);
    }
    public function tambah()
    {
        $pemilik = new Pemilik;
        return view('kendaraan.tambah',compact('kendaraan','pemilik'));
    }
    public function simpan(kendaraanrequest $input)
    {   
         // // validasi
         // $this->validate($input,[
         //    'username'=>'required',
         //    'email'=>'required',
         //    'password'=>'required',
         //    ]);


        $kendaraan = new kendaraan;
        $kendaraan -> id = $input->id;
        $kendaraan -> no_plat = $input->no_plat;
        $kendaraan -> merk = $input->merk;
        $kendaraan -> pemilik_id = $input->pemilik_id;
        
        
     $informasi = $kendaraan ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('kendaraan')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $kendaraan = kendaraan::find($id);
        $pemilik = new Pemilik;
        return view('kendaraan.edit', compact('kendaraan','pemilik'));
          }
    
    public function lihat($id)
    {
        $kendaraan = kendaraan::find($id);
         return view('kendaraan.lihat')->with(array('kendaraan'=>$kendaraan));      
}
    public  function update($id, Request $input){
        $kendaraan = kendaraan::find($id);
        $kendaraan -> id = $input->id;
        $kendaraan -> no_plat = $input->no_plat;
        $kendaraan -> merk = $input->merk;
        $kendaraan -> pemilik_id = $input->pemilik_id;
     $informasi = $kendaraan ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('kendaraan')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $kendaraan = kendaraan::find($id);
       
     $informasi = $kendaraan ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('kendaraan')->with(['informasi'=>$informasi]);
}
}
