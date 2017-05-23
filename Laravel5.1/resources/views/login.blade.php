<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>@yield( 'page_title', 'Halaman Awal') | Login</title>
        <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
        <style>
           html, body {
                background: url("/1.jpg");
                 background-position:center;
                 background-repeat: no-repeat;
                 background-size: cover;

                padding-top: 50px;
                padding-bottom: 70px;
           }

           .starter-template{
            padding: 30px 15px;
            text-align: center;
           }

           .form-horizontal{
            padding: 10px 10px;
           }

           footer{
            padding-top: 15px;
            text-align: right;
           }
    </style>
        </style>
                
</head>
<body>
        <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                    <div class="navbar-header">
            
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>  
            </button>
            
                    </div>
            </div>
        </nav>

<div class="clearfix"></div>
                <div class="col-md-4 col-md-offset-4">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $errors)
                                    <li>{{ $errors  }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<div class="panel panel-default">
                            <div class="panel-heading">
                                    <strong>MASUK AKUN</strong>
                            </div>




{!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
                            <div class="form-group">
                                    <label class="col-sm-4 control-label">Username</label>
                                    <div class="col-sm-8">


{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                                    </div>
                            </div>

                            
                            <div class="form-group">
                                    <label class="col-sm-4 control-label">password</label>
                                    <div class="col-sm-8">


{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                                    </div>
                            </div>

                        <div style="width: 100%;text-align: right;">
                                <button class="btn btn-primary"><i class="fa fa-lock"></i>Masuk</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Coba Lagi</button>
                        </div>

{!! Form::close() !!}
                    </div>
                </div>

            <nav class="navbar navbar-default navbar-fixed-bottom">
           <footer class="container">
               <!   please dont delete this >
               <a href="http://google.com">
               <span>kelompok 3</footer>
       </nav>


<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js">
                $(function(){
                        $('[data-toggle="tooltip"]').tooltip()
                });
        </script>

</body>
</html>