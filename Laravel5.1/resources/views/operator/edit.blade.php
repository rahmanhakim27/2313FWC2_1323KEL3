@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('operator')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data operator</strong>
 </div>
 {!! Form::model($operator,['url'=>'operator/edit/'.$operator->id,'class'=>'form-horizontal']) !!}
@include('operator.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop