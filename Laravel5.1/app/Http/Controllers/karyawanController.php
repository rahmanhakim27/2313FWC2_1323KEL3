<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\karyawan;

use App\pengguna;

use App\Http\Requests\karyawanRequest;


class karyawanController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {   
        $semuaKaryawan=karyawan::all();
        return view('karyawan.awal', compact('semuaKaryawan'));
    }
    public function tambah()
    {
        return view('karyawan.tambah');
    }
    public function simpan(karyawanRequest $input)
    {   
        $pengguna = new Pengguna($input->only('username','password','email'));
        if ($pengguna->save()){
        $karyawan = new karyawan;
        $karyawan -> nama_karyawan = $input->nama_karyawan;
        $karyawan -> alamat_karyawan = $input->alamat_karyawan;
        $karyawan -> no_telepon_karyawan = $input->no_telepon_karyawan;
        $karyawan -> email = $input->email;
        // $karyawan -> pengguna_id = $input->pengguna_id;
        if ($pengguna->karyawan()->save($karyawan))
            $this->informasi='Berhasil simpan data';
            }
        
     // $informasi = $karyawan ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('karyawan')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $karyawan = karyawan::find($id);
        return view('karyawan.edit')->with(array('karyawan'=>$karyawan));
          }
    
    public function lihat($id)
    {
        $karyawan = karyawan::find($id);
         return view('karyawan.lihat')->with(array('karyawan'=>$karyawan));      
}
    public  function update($id, karyawanRequest $input){
        $karyawan = karyawan::find($id);
        
        $karyawan -> nama_karyawan = $input->nama_karyawan;
        $karyawan -> alamat_karyawan = $input->alamat_karyawan;
        $karyawan -> no_telepon_karyawan = $input->no_telepon_karyawan;
        $karyawan -> email = $input->email;
        $karyawan->save();
        // $karyawan -> pengguna_id = $input->pengguna_id;
             if (!is_null($input->username)){
            $pengguna=$karyawan->pengguna->fill($input->only('username'));
           if (!empty($input->password))
             $pengguna->password=$input->password;
        if ($pengguna->save()) $this->informasi='Berhasil simpan data';
    }else {
            $this->informasi='Gagal simpan data';
        }
     // $informasi = $karyawan ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('karyawan')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
        $karyawan = karyawan::find($id);
        if ($karyawan->pengguna()->delete()){
            if ($karyawan->delete())$this->informasi='Berhasil hapus data';
        }
       
     // $informasi = $karyawan ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('karyawan')->with(['informasi'=>$this->informasi]);
}

}
