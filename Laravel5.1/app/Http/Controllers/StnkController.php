<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\stnkrequest;
use App\Stnk;
use App\kendaraan;
use App\pemilik;

class StnkController extends Controller
{
    public function awal()
    {
        return view('stnk.awal',['data'=>stnk::all()]);
    }
    public function tambah()
    {
        $kendaraan = new kendaraan;
    	$pemilik = new pemilik;
        return view('stnk.tambah',compact('stnk','kendaraan', 'pemilik'));
    }
    public function simpan(stnkrequest $input)
    {   
         // // validasi
         // $this->validate($input,[
         //    'username'=>'required',
         //    'email'=>'required',
         //    'password'=>'required',
         //    ]);


        $stnk = new stnk;
        $stnk -> nama_pemilik = $input->nama_pemilik;
        $stnk -> merk = $input->merk;
        $stnk -> jenis = $input->jenis;
        $stnk -> tanggal_pembayaran = $input->tanggal_pembayaran;
        $stnk -> kendaraan_id = $input->kendaraan_id;
    
        
     $informasi = $stnk ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('stnk')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $stnk = stnk::find($id);
        $kendaraan = new kendaraan;
        $pemilik = new pemilik;
        return view('stnk.edit', compact('stnk','kendaraan','pemilik'));
          }
    
    public function lihat($id)
    {
        $stnk = stnk::find($id);
         return view('stnk.lihat')->with(array('stnk'=>$stnk));      
}
    public  function update($id, Request $input){
        $stnk = stnk::find($id);
        $stnk -> no_plat = $input->no_plat;
        $stnk -> merk = $input->merk;
        $stnk -> pemilik_id = $input->pemilik_id;
        
     $informasi = $stnk ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('stnk')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $stnk = stnk::find($id);
       
     $informasi = $stnk ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('stnk')->with(['informasi'=>$informasi]);
}
}
