<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Operator;

class operatorController extends Controller
{
    public function awal()
    {
        return view('operator.awal',['data'=>operator::all()]);
    }
    public function tambah()
    {
        return view('operator.tambah');
    }
    public function simpan(Request $input)
    {   
         // // validasi
         // $this->validate($input,[
         //    'username'=>'required',
         //    'email'=>'required',
         //    'password'=>'required',
         //    ]);


        $operator = new operator;
        $operator -> username = $input->username;
        $operator -> password = $input->password;
        $operator -> level = $input->level;
    
        
     $informasi = $operator ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('operator')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $operator = operator::find($id);
        return view('operator.edit')->with(array('operator'=>$operator));
          }
    
    public function lihat($id)
    {
        $operator = operator::find($id);
         return view('operator.lihat')->with(array('operator'=>$operator));      
}
    public  function update($id, Request $input){
        $operator = operator::find($id);
        $operator -> username = $input->username;
        $operator -> password = $input->password;
        $operator -> level = $input->level;
        
     $informasi = $operator ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('operator')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $operator = operator::find($id);
       
     $informasi = $operator ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('operator')->with(['informasi'=>$informasi]);
}
}
