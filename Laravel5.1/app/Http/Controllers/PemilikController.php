<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\pemilikrequest;

use App\Pemilik;

class PemilikController extends Controller
{
    public function awal()
    {
        return view('pemilik.awal',['data'=>pemilik::all()]);
    }
    public function tambah()
    {
        return view('pemilik.tambah');
    }
    public function simpan(pemilikrequest $input)
    {   
         // // validasi
         // $this->validate($input,[
         //    'username'=>'required',
         //    'email'=>'required',
         //    'password'=>'required',
         //    ]);


        $pemilik = new Pemilik;
        $pemilik -> nama_pemilik = $input->nama_pemilik;
        $pemilik -> alamat = $input->alamat;
        $pemilik -> no_telp = $input->no_telp;
    
        
     $informasi = $pemilik ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('pemilik')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $pemilik = Pemilik::find($id);
        return view('pemilik.edit')->with(array('pemilik'=>$pemilik));
          }
    
    public function lihat($id)
    {
        $pemilik = Pemilik::find($id);
         return view('pemilik.lihat')->with(array('pemilik'=>$pemilik));      
}
    public  function update($id, Request $input){
        $pemilik = Pemilik::find($id);
        $pemilik -> nama_pemilik = $input->nama_pemilik;
        $pemilik -> alamat = $input->alamat;
        $pemilik -> no_telp = $input->no_telp;
        
     $informasi = $pemilik ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('pemilik')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $pemilik = Pemilik::find($id);
       
     $informasi = $pemilik ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('pemilik')->with(['informasi'=>$informasi]);
}
}
