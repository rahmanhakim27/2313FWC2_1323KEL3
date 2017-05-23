<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\dendarequest;
use App\Denda;
use App\pajak;
use App\pemilik;    

class DendaController extends Controller
{
    public function awal()
    {
        return view('denda.awal',['data'=>denda::all()]);
    }  
    public function tambah()
    {
        $pajak = new pajak;
        $pemilik = new pemilik;
        return view('denda.tambah',compact('denda','pajak','pemilik'));
    }
       
         // // validasi
         // $this->validate($input,[
         //    'username'=>'required',
         //    'email'=>'required',
         //    'password'=>'required',
         //    ]);

		public function simpan(dendarequest $input)
		{
        $denda = new denda();
        $denda -> nama_pemilik = $input->nama_pemilik;
        $denda -> keterlambatan = $input->keterlambatan;
        $denda -> total = $input->total;
        $denda -> pajak_id = $input->pajak_id;
    
        
     $informasi = $denda ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('denda')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id){
        $denda = denda::find($id);
        $pajak = new pajak;
        $pemilik = new pemilik;
        return view('denda.edit',compact('pajak','denda','pemilik'));
          }
    
    public function lihat($id)
    {
        $denda = denda::find($id);
         return view('denda.lihat')->with(array('denda'=>$denda));      
}
    public  function update($id, Request $input){
        $denda = denda::find($id);
        $denda -> nama_pemilik = $input->nama_pemilik;
        $denda -> keterlambatan = $input->keterlambatan;
        $denda -> total = $input->total;
        $denda -> pajak_id = $input->pajak_id;
        
     $informasi = $denda ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('denda')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $denda = denda::find($id);
       
     $informasi = $denda ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('denda')->with(['informasi'=>$informasi]);
}
}
