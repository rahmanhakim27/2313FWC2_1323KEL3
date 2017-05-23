<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>@yield('page_title','Halaman awal') | Laboratorium Pemrograman FW</title>

        <link rel="stylesheet" type="text/css"
        href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}} ">
        <link rel="stylesheet" type="text/css"
        href="{{asset('component/font-awesome/css/font-awesome.min.css')}} ">
        <style type="text/css">

           
            body {
                padding-top: 70px;
                padding-bottom: 70px;
           }

           .starter-template{
            padding: 40px 15px;
            text-align: center;
           }

           .form-horizontal{
            padding: 15px 10px;
           }

           footer{
            padding-top: 15px;
            text-align: right;
           }
    </style>
    </head>
    <body>
       <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle-collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="navbar-brand">laravel -5</a>
            </div>
            <td>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> pemilik <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('pemilik')}}">data pemilik</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('kendaraan')}}">kendaraan</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('stnk')}}">stnk</a></li>
                            </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Kendaraan <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('kendaraan')}}">Data Kendaraan</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('stnk')}}">stnk</a></li>
                            </ul>
                    </li>

                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('pajak')}}">transaksi</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('denda')}}">denda</a></li>
                                
                            </ul>
                    </li>
                    <li class="dropdown active">
                          <a href="{{ url('logout')}}">Logout</a>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
       </nav>
       </td>
       <div class="clearfix"></div>
       <div class="container">
           @if(Session::has('informasi'))
                <div class="alert alert-info">
                    <strong>Informasi :</strong>
                    {{Session::get('informasi')}}
                </div>
            @endif



            @if (count($errors) >0)
            <div class="alert alert-danger">
              <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
              </ul>
            </div>
            @endif



            @yield('container')
       </div>
       <nav class="navbar navbar-default navbar-fixed-bottom">
           <footer class="container">
               <!   please dont delete this >
               <marquee> kelompok 3 </marquee>
       </nav>

       <script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
            $(function(){
                $('[data-toggle="tolltip"]').tolltip()
            });
        </script>





                          
                   


</body>
</html>

