@extends('petugas')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data Transaksi</strong>
<a href="{{url('pajak/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>pemilik</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>Nama Pemilik</th>
             <th>Total Pajak</th>
             <th>Tanggal Pembayaran</th>
             <!-- <th>Stnk_id</th> -->
             <th>Nama Petugas</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($data as $pajak)
         <tr>
             
             <td>{{$pajak->nama_pemilik or 'pajak kosong'}}</td>
              <td>{{$pajak->total_pajak or 'total kosong'}}</td>
               <td>{{$pajak->tanggal_pembayaran or 'pembayaran kosong'}}</td>
                <!-- <td>{{$pajak->stnk->nama_pemilik or 'stnk kosong'}}</td> -->
                <td>{{$pajak->petugas->nama_petugas  or 'petugas kosong'}}</td>
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('pajak/edit/'.$pajak->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('pajak/lihat/'.$pajak->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('pajak/hapus/'.$pajak->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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