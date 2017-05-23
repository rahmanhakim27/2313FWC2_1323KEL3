@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data Kendaraan</strong>
<a href="{{url('kendaraan/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>kendaraan</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <!-- <th>id  </th> -->
             <th>No Plat</th>
             <th>Merk</th>
             <th>Nama Pemilik</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=  1;?>
         @foreach ($data as $kendaraan)
         <tr>
             
              <!-- <td>{{$kendaraan->id or 'id kosong'}}</td> -->
              <td>{{$kendaraan->no_plat or 'username kosong'}}</td>
               <td>{{$kendaraan->merk or 'email kosong'}}</td>
                <td>{{$kendaraan->pemilik->nama_pemilik or 'password kosong'}}</td>
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('kendaraan/edit/'.$kendaraan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('kendaraan/lihat/'.$kendaraan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('kendaraan/hapus/'.$kendaraan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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