<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">UserName</label>
	<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
	</div>
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
	{!! Form::text('password',null,['class'=>'form-control','placeholder'=>"password"]) !!}
	</div>
	
	
	<label class="col-sm-2 control-label">Level</label>
	<div class="col-sm-10">
	{!! Form::text('level',null,['class'=>'form-control','placeholder'=>"level"]) !!}
	</div>
</div>
	
