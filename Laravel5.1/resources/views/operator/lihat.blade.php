@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('operator') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data operator
 </strong>
 </div>
<table class="table">
<tr>
 		<td>username</td>
 		<td>:</td>
 		<td>{{ $operator->username }}</td>
 	</tr><tr>
 		<td>password</td>
 		<td>:</td>
 		<td>{{ $operator->password }}</td>
 	</tr>
 	<tr>
 		<td>level</td>
 		<td>:</td>
 		<td>{{ $operator->level }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $operator->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $operator->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop