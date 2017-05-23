<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama_pemilik',null,['class'=>'form-control','placeholder'=>"nama"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
	{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
	</div>
	</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Telpon</label>
	<div class="col-sm-10">
	{!! Form::text('no_telp',null,['class'=>'form-control','placeholder'=>"Nomor Togel"]) !!}
	</div>
</div>
