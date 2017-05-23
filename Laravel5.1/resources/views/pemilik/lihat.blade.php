@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('pemilik') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data pemilik
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $pemilik->id }}</td>
 	</tr>
 	<tr>
 		<td>Nama</td>
 		<td>:</td>
 		<td>{{ $pemilik->nama_pemilik }}</td>
 	</tr>
 	<tr>
 		<td>Alamat</td>
 		<td>:</td>
 		<td>{{ $pemilik->alamat }}</td>
 	</tr>
 	<tr>
 		<td>No telpon</td>
 		<td>:</td>
 		<td>{{ $pemilik->no_telp }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $pemilik->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $pemilik->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop