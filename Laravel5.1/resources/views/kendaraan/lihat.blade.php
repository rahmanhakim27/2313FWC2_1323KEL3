@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('kendaraan') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Kendaraan
 </strong>
 </div>
<table class="table">
 	<tr>
 		<td>Id</td>
 		<td>:</td>
 		<td>{{ $kendaraan->id}}</td>
 	</tr><tr>
 		<td>Plat</td>
 		<td>:</td>
 		<td>{{ $kendaraan->no_plat}}</td>
 	</tr>
 	<tr>
 		<td>Merk</td>
 		<td>:</td>
 		<td>{{ $kendaraan->merk }}</td>
 	</tr>
 	<tr>
 		<td>Pemilik</td>
 		<td>:</td>
 		<td>{{ $kendaraan->pemilik->nama_pemilik }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $kendaraan->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $kendaraan->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop