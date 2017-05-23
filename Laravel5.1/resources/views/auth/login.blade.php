@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">login</div>
                <div class="panel-body">
                 {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
            <div class="form-group">
                <label class="col-sm-4 control-label">Username</label>
                <div class="col-sm-8">
                    {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Password</label>
                <div class="col-sm-8">
                    {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                </div>
            </div>
            <div style="width: 100%;text-align: center;">
                <button class="btn btn-primary">    <i class="fa fa-lock"></i>Masuk</button>
                <button type="reset" class="btn btn-danger">    <i class="fa fa-undo"></i>Ulangi</button>

            </div>
            {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
