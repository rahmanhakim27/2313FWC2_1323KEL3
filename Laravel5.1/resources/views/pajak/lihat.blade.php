@extends('petugas')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('pajak') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Transaksi
 </strong>
 </div>
<table class="table">
<tr>
 		<td>Pemilik</td>
 		<td>:</td>
 		<td>{{ $pajak->nama_pemilik }}</td>
 	</tr>
 	<tr>
 		<td>Total</td>
 		<td>:</td>
 		<td>{{ $pajak->total_pajak }}</td>
 	</tr>
 	<tr>
 		<td>Pembayaran</td>
 		<td>:</td>
 		<td>{{ $pajak->tanggal_pembayaran }}</td>
 	</tr>
 	<tr>
 		<td>Stnk</td>
 		<td>:</td>
 		<td>{{ $pajak->stnk_id }}</td>
 	</tr>
 	<tr>
 		<td>Petugas</td>
 		<td>:</td>
 		<td>{{ $pajak->petugas_id }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $pajak->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $pajak->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop