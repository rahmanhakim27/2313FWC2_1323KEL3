<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\pajakrequest;

use App\Pajak;
use App\stnk;
use App\petugas;
use Redirect;
use Input;

class pajakController extends Controller
{
    public function awal()
    {
        return view('pajak.awal',['data'=>pajak::all()]);
    }
    public function tambah()
    {
        $stnk = new stnk;
        $petugas = new petugas;
        return view('pajak.tambah',compact('pajak','stnk','petugas'));
    }
    public function simpan(pajakrequest $input)
    {   


        $pajak = new pajak;
        $pajak -> nama_pemilik = $input->nama_pemilik;
        $pajak -> total_pajak = $input->total_pajak;
        $pajak -> tanggal_pembayaran = $input->tanggal_pembayaran;
        $pajak -> stnk_id = $input->stnk_id;
        $pajak -> petugas_id = $input->petugas_id;
    
        
     $informasi = $pajak ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('pajak')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $pajak = pajak::find($id);
        $stnk = new stnk;
        $petugas = new petugas;
        return view('pajak.edit',compact('stnk','pajak','petugas'));
          }
    
    public function lihat($id)
    {
        $pajak = pajak::find($id);
         return view('pajak.lihat')->with(array('pajak'=>$pajak));      
}
    public  function update($id, Request $input){
        $pajak = pajak::find($id);
        $pajak -> nama_pemilik = $input->nama_pemilik;
        $pajak -> total_pajak = $input->total_pajak;
        $pajak -> tanggal_pembayaran = $input->tanggal_pembayaran;
        $pajak -> stnk_id = $input->stnk_id;
        $pajak -> petugas_id = $input->petugas_id;
        
     $informasi = $pajak ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('pajak')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $pajak = pajak::find($id);
       
     $informasi = $pajak ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('pajak')->with(['informasi'=>$informasi]);
}
}
