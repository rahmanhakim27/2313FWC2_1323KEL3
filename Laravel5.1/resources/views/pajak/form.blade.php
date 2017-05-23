<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama_pemilik',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">total</label>
	<div class="col-sm-10">
	{!! Form::text('total_pajak',null,['class'=>'form-control','placeholder'=>"Total"]) !!}
	</div>
	</div>
	<div class="form-group">
<label class="col-sm-2 control-label">pembayaran</label>
	<div class="col-sm-10">
	{{ Form::date('tanggal_pembayaran',null,['class'=>'form-control','placeholder'=>"Pembayaran"]) }}	
	</div>
</div>
<label class="col-sm-2 control-label">stnk</label>
	<div class="col-sm-10">
	{!! Form::select('stnk_id',$stnk->lists('nama_pemilik','id'),null,['class'=>'form-control','id'=>'stnk_id','placeholder'=>"stnk"]) !!}
	</div>
<label class="col-sm-2 control-label">petugas</label>
	<div class="col-sm-10">
	{!! Form::select('petugas_id',$petugas->lists('nama_petugas','id'),null,['class'=>'form-control','id'=>'petugas_id','placeholder'=>"petugas"]) !!}
	</div>	

