@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('stnk')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data stnk</strong>
 </div>
 {!! Form::model($stnk,['url'=>'stnk/edit/'.$stnk->id,'class'=>'form-horizontal']) !!}
@include('stnk.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop