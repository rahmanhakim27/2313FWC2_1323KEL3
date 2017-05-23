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
                    
                    

                    
                    <ul class="nav navbar-nav" style="float: right;">
                      <li class="divider"></li>
                      <li class="divider"></li>
                      <li class="divider"></li>
                      <li class="divider"></li>
                <li >
                  <a href="{{ url('register') }}">
                  <i class="fa fa-sign-out" style="color:#535353"></i> | Register</a>
                </li>
          </ul>

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



  


            @yield('content')
       </div>
       <nav class="navbar navbar-default navbar-fixed-bottom">
           <footer class="container">
               <!   please dont delete this >
               created by Rahman Hakim
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

