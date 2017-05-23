<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">nama pemilik</label>
	<div class="col-sm-10">
	{!! Form::select('nama_pemilik',$pemilik->lists('nama_pemilik','nama_pemilik'),null,['class'=>'form-control','placeholder'=>"nama"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">keterlambatan</label>
	<div class="col-sm-10">
	{!! Form::text('keterlambatan',null,['class'=>'form-control','placeholder'=>"keterlambatan"]) !!}
	</div>
	</div>
	<div class="form-group">
<label class="col-sm-2 control-label">total</label>
	<div class="col-sm-10">
	{!! Form::text('total',null,['class'=>'form-control','placeholder'=>"total"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tanggal pembayaran</label>
	<div class="col-sm-10">
	{!! Form::select('pajak_id',$pajak->lists('tanggal_pembayaran','id'),null,['class'=>'form-groupcontrol','placeholder'=>"tanggal pembayaran"]) !!}
	</div>
	</div>
