@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data operator</strong>
<a href="{{url('operator/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>operator</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>username</th>
             <th>password</th>
             <th>level</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($data as $operator)
         <tr>
             <!-- <td>{{$x++}}</td> -->
                <td>{{$operator->username or 'user kosong'}}</td>
                <td>{{$operator->password or 'password kosong'}}</td>
                <td>{{$operator->level or 'kosong'}}</td>
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('operator/edit/'.$operator->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('operator/lihat/'.$operator->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('operator/hapus/'.$operator->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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