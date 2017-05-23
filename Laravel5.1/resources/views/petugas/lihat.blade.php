@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('petugas') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data petugas
 </strong>
 </div>
<table class="table">
<tr>
 		<td>id</td>
 		<td>:</td>
 		<td>{{ $petugas->id }}</td>
 	</tr><tr>
 		<td>nama_petugas</td>
 		<td>:</td>
 		<td>{{ $petugas->nama_petugas }}</td>
 	</tr>
 	<tr>
 		<td>alamat</td>
 		<td>:</td>
 		<td>{{ $petugas->alamat }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $petugas->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $petugas->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop