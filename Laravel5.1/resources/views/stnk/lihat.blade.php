@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('stnk') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data STNK
 </strong>
 </div>
<table class="table">
 	<tr>
 		<td>Plat</td>
 		<td>:</td>
 		<td>{{ $stnk->nama_pemilik}}</td>
 	</tr>
 	<tr>
 		<td>Merk</td>
 		<td>:</td>
 		<td>{{ $stnk->merk }}</td>
 	</tr>
 	<tr>
 		<td>jenis</td>
 		<td>:</td>
 		<td>{{ $stnk->jenis }}</td>
 	</tr>
 	<tr>
 		<td>tanggal pembayaran</td>
 		<td>:</td>
 		<td>{{ $stnk->tanggal_pembayaran }}</td>
 	</tr>
 	<tr>
 		<td>kendaraan id</td>
 		<td>:</td>
 		<td>{{ $stnk->kendaraan_id }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $stnk->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $stnk->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop