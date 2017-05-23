@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data pemilik</strong>
<a href="{{url('pemilik/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>pemilik</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             
             <th>Nama</th>
             <th>Alamat</th>
             <th>No Telpon</th>
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($data as $pemilik)
         <tr>
             <td>{{$x++}}</td>
             
              <td>{{$pemilik->nama_pemilik or 'username kosong'}}</td>
               <td>{{$pemilik->alamat or 'email kosong'}}</td>
                <td>{{$pemilik->no_telp or 'password kosong'}}</td>
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('pemilik/edit/'.$pemilik->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('pemilik/lihat/'.$pemilik->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('pemilik/hapus/'.$pemilik->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                   <i class="fa fa-remove"></i>
               </a>
               </div>
               </td>

         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
 @stop