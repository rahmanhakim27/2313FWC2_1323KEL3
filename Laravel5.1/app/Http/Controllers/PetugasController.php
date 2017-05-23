<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\petugasrequest;

use App\Petugas;

class petugasController extends Controller
{
    public function awal()
    {
        return view('petugas.awal',['data'=>petugas::all()]);
    }
    public function tambah()
    {
        return view('petugas.tambah');
    }
    public function simpan(petugasrequest $input)
    {   
         // // validasi
         // $this->validate($input,[
         //    'username'=>'required',
         //    'email'=>'required',
         //    'password'=>'required',
         //    ]);


        $petugas = new petugas;
        $petugas -> id = $input->id;
        $petugas -> nama_petugas = $input->nama_petugas;
        $petugas -> alamat = $input->alamat;
    
        
     $informasi = $petugas ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('petugas')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $petugas = petugas::find($id);
        return view('petugas.edit')->with(array('petugas'=>$petugas));
          }
    
    public function lihat($id)
    {
        $petugas = petugas::find($id);
         return view('petugas.lihat')->with(array('petugas'=>$petugas));      
}
    public  function update($id, Request $input){
        $petugas = petugas::find($id);
        $petugas -> id = $input->id; 
        $petugas -> nama_petugas = $input->nama_petugas;
        $petugas -> alamat = $input->alamat;
        
     $informasi = $petugas ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('petugas')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $petugas = petugas::find($id);
       
     $informasi = $petugas ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('petugas')->with(['informasi'=>$informasi]);
}
}
