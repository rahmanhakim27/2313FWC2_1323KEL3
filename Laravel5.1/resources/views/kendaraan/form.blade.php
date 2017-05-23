<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">no_plat</label>
	<div class="col-sm-10">
	{!! Form::text('no_plat',null,['class'=>'form-control','placeholder'=>"no_plat"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">merk</label>
	<div class="col-sm-10">
	{!! Form::text('merk',null,['class'=>'form-control','placeholder'=>"merk"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">pemilik</label>
	<div class="col-sm-10">
	{!! Form::select('pemilik_id',$pemilik->lists('nama_pemilik','id'),null,['class'=>'form-control','id'=>'pemilik_id','placeholder'=>"pemilik_idk"]) !!}
</div>
	</div>
