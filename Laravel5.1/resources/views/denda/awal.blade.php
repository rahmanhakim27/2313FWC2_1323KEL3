@extends('petugas')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data denda</strong>
<a href="{{url('denda/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>denda</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>nama pemilik</th>
             <th>keterlambatan</th>
             <th>total</th>
             <th>tanggal pembayaran</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($data as $denda)
         <tr>
             
              <td>{{$denda->nama_pemilik or 'username kosong'}}</td>
               <td>{{$denda->keterlambatan or 'email kosong'}}</td>
                <td>{{$denda->total or 'password kosong'}}</td>
                <td>{{$denda->pajak->tanggal_pembayaran or 'password kosong'}}</td>
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('denda/edit/'.$denda->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('denda/lihat/'.$denda->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('denda/hapus/'.$denda->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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