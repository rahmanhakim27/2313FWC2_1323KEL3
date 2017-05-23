@extends('petugas')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('denda') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Denda
 </strong>
 </div>
<table class="table">
 	<tr>
 		<td>Plat</td>
 		<td>:</td>
 		<td>{{ $denda->nama_pemilik}}</td>
 	</tr>
 	<tr>
 		<td>Merk</td>
 		<td>:</td>
 		<td>{{ $denda->keterlambatan }}</td>
 	</tr>
 	<tr>
 		<td>total</td>
 		<td>:</td>
 		<td>{{ $denda->total }}</td>
 	</tr>
 	<tr>
 		<td>Pemilik</td>
 		<td>:</td>
 		<td>{{ $denda->pajak_id }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $denda->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $denda->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop