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
	<label class="col-sm-2 control-label">merk</label>
	<div class="col-sm-10">
	{!! Form::select('merk',$kendaraan->lists('merk','id'),null,['class'=>'form-control','id'=>'kendaraan_id','placeholder'=>"merk"]) !!}	
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">jenis</label>
	<div class="col-sm-10">
	{!! Form::text('jenis',null,['class'=>'form-control','placeholder'=>"jenis"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">tanggal pembayaran</label>
	<div class="col-sm-10">
	{!! Form::date('tanggal_pembayaran',null,['class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">kendaraan</label>
	<div class="col-sm-10">
	{!! Form::select('kendaraan_id',$kendaraan->lists('no_plat','id'),null,['class'=>'form-control','id'=>'kendaraan_id','placeholder'=>"NO Plat"]) !!}
</div>
	</div>
