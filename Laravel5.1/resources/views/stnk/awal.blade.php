@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data stnk</strong>
<a href="{{url('stnk/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>stnk</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>nama pemilik</th>
             <!-- <th>merk</th> -->
             <th>jenis</th>
             <th>tanggal pembayaran</th>
             <th>nama merk kendaraan</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($data as $stnk)
         <tr>
             
               <td>{{$stnk->nama_pemilik or 'email kosong'}}</td>
               <!-- <td>{{$stnk->kendaraan->merk or 'email kosong'}}</td> -->
                <td>{{$stnk->jenis or 'password kosong'}}</td>
                <td>{{$stnk->tanggal_pembayaran or 'password kosong'}}</td>
                <td>{{$stnk->kendaraan->merk or ' kosong'}}</td>
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('stnk/edit/'.$stnk->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('stnk/lihat/'.$stnk->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('stnk/hapus/'.$stnk->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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